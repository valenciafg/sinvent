<?php 
 if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//namespace ComponenteWeb;
/**
 * Implementa el consumo de los servicios web para autenticacion de usuarios.<br>
 * Garantiza interoperatividad entre distintos agentes/clientes de consumo.<br>
 * Hace uso de la libreria nativa PEAR::SOAP.<br>
 *
 * @package    clienteSeguridadWeb
 * @filesource
 * @version    0.1
 * @date       17/08/09
 * @author     Juan Cisneros
 *
 */


class Clienteseguridadweb{

	private $wsdl;
	private $resultadoLdap;
	private $validacion;
	
	 /**
	 *
	 * Constructor de la clase.<br>
	 * @param string $wsdl, url al archivo wsdl de descripcion del servicio web.
	 *
	*/
	//public function __construct($wsdl){
	public function __construct(){
		//parent::__construct();	
		//$this->wsdl	=	$wsdl;
		$this->wsdl =  "http://autenticacion-test-app.pdvsa.com/controlAcceso/modelo/class.ImplementSeguridadWeb.php?wsdl";
	}
	
	
	/**
	* Metodo cliente requerido para iniciar la sesion de usuario.<br>
	* Verifica si el usuario esta validado correctamente en el directorio activo.<br>
	* Verifica si el usuario ya esta autenticado en la misma aplicacion desde otro equipo.<br>
	* Registra la sesion de usuario en la base de datos.<br> 
	* @param string $indicador indicador de intranet.
	* @param string $contrasena contrasena de intranet.
	* @param string $aplicacion hash(nombre de la aplicacion solicitante)
	* @param string $modoConexion modo de conexion ( '0' = 1 usuario se conecta desde 1 equipo , '1' = 1 usuario se conecta desde n equipo )
	* @return ObjectSoapClient stdClass  $object->codigoMensaje , $object->descripcion
	* <br><pre>Posibles valores de retorno:
	*  - modoConexion: '0'
	*    -- 'codigoMensaje'=>'01','descripcion'=>'Usuario validado satisfactoriamente.'
	*    -- 'codigoMensaje'=>'02','descripcion'=>'Usuario/clave de usuario invalida'
	*    -- 'codigoMensaje'=>'03','descripcion'=>'Usuario con doble autenticacion'
	*    -- 'codigoMensaje'=>'04','descripcion'=>'Usuario validado satisfactoriamente (Forzando Credenciales por Inactividad).'
	*    -- 'codigoMensaje'=>'05','descripcion'=>'Aplicacion no registrada'
	*  - modoConexion: '1'
	*    -- 'codigoMensaje'=>'01','descripcion'=>'Usuario validado satisfactoriamente.'
	*    -- 'codigoMensaje'=>'02','descripcion'=>'Usuario/clave de usuario invalida'
	*    -- 'codigoMensaje'=>'03','descripcion'=>'Usuario validado satisfactoriamente (Forzando Credenciales).'
	*    -- 'codigoMensaje'=>'05','descripcion'=>'Aplicacion no registrada'</pre>
	*/
	public function iniciarSesion($indicador, $contrasena, $aplicacion="sinvent", $modoConexion="0"){  
		     //return array('codigoMensaje' =>'01');
     	//$ip	=	$this->getIp();   
     	$ip = $_SERVER['SERVER_ADDR'];
     	$client	=	new SoapClient($this->wsdl);						
	  	$parametros =  array(
	               		"indicador" => $indicador,
	               		"contrasena" => $contrasena,
	               		"ip" => $ip,
	               		"aplicacion" => $aplicacion,
	               		"modo" => $modoConexion
               		);		   		 
  		$resultado =	$client->__call("SeguridadWeb.iniciarSesion",$parametros);								
		return $resultado;
  }
	
  
  
  /**
	* Metodo para obtener los atributos de un usuario registrado en el directorio activo de PDVSA.<br>
   * Validacion directorio activo LDAP - PDVSA.<br>
	* @param string $indicador indicador de intranet
	* @return mixed array $usuario(indicador, nombre, apellido,correo, telefonos, grupos, etc)
	*/
  public function obtenerInfoUsuario($indicador)
  {   
          
     $client	=	new SoapClient($this->wsdl);				
	  $parametros =  array( "indicador" 	=> $indicador );

		$this->resultadoLdap =	$client->__call("SeguridadWeb.obtenerUsuarioLdap",$parametros); 	
		
		return $this->resultadoLdap;     
   
  }
  

   /**
	* Metodo para validar el funcionamiento del SGBD y Servidor WEB usado por el sistema.<br>
        * Validacion SGBD.<br>
        * Validacion SERVIDOR WEB.<br>
	* @return mixed array $validacion ObjectSoapClient stdClass  $object->codigoMensaje , $object->descripcion
	*/
  public function validarServicioWeb()
  {   
          
      $client	=	new SoapClient($this->wsdl);
	  $parametros =  array();				
	  

	  $this->validacion =	$client->__call("SeguridadWeb.validarServicioWeb",$parametros); 	
		
	  return $this->validacion;     
   
  } 
  
  /**
	* Metodo para validar el funcionamiento del SGBD y Servidor WEB usado por el sistema.<br>
    * Validacion Aplicacion.<br> 
    * Validacion SGBD.<br>
    * Validacion SERVIDOR WEB.<br>
	* @return mixed array $validacion ObjectSoapClient stdClass  $object->codigoMensaje , $object->descripcion
	*/
  public function validarServicioWebSeguro($aplicacion="sinvent")
  {   
          
      $client	=	new SoapClient($this->wsdl);				
	  $parametros =  array( "aplicacion" 	=> $aplicacion );

	  $this->validacion =	$client->__call("SeguridadWeb.validarServicioWebSeguro",$parametros); 	
		
	  return $this->validacion;     
   
  } 
  
   
  
	 /**
	 * Obtener la cedula de identidad del usuario consultado por el directorio activo
	 * Requerido utilizar previamente el metodo obtenerInfoUsuario()
	 * @return string cedula de identidad
	 */
	public function getCedulaIdentidadUsuarioLdap() {
	
		if(is_object($this->resultadoLdap))
			return $this->resultadoLdap->ci;
		else
			return 'Informacion No Disponible: Debe utilizar previamente el metodo obtenerInfoUsuario()';
	}
	
	 /**
	 * Obtener el nombre y apellido del usuario consultado por el directorio activo
	 * Requerido utilizar previamente el metodo obtenerInfoUsuario()
	 * @return string nombreApellido
	 */
	public function getNombreApellidoUsuarioLdap() {
	
		if(is_object($this->resultadoLdap))
			return $this->resultadoLdap->nombreApellido;
		else
			return 'Informacion No Disponible: Debe utilizar previamente el metodo obtenerInfoUsuario()';
	}
	/**
	 * Obtener el nombre y apellido del usuario consultado por el directorio activo
	 * Requerido utilizar previamente el metodo obtenerInfoUsuario()
	 * @return string nombreApellido
	 */
	public function getIndicadorUsuarioLdap() {
	
		if(is_object($this->resultadoLdap))
			return $this->resultadoLdap->indicador;
		else
			return 'Informacion No Disponible: Debe utilizar previamente el metodo obtenerInfoUsuario()';
	}
	
	/**
	 * Obtener el correo electronico del usuario consultado por el directorio activo
	 * Requerido utilizar previamente el metodo obtenerInfoUsuario()
	 * @return string mail
	 */
	public function getCorreoElectronicoUsuarioLdap() {
	
		if(is_object($this->resultadoLdap))
			return $this->resultadoLdap->mail;
		else
			return 'Informacion No Disponible: Debe utilizar previamente el metodo obtenerInfoUsuario()';
	}
		 
	
  
	 /**
		* Metodo para obtener la direccion Ip de la maquina solicitante del servicio web.<br>
   	* Filtra Ip real del equipo, saltando proxy intermedios.<br>
		* @return string $client_ip direccion ip de la maquina solicitante del servicio web
		*/ 
	  private function getIp()
	  {
	   
	   if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) &&( $_SERVER['HTTP_X_FORWARDED_FOR'] != '' ))
	   {
	      $client_ip =
	         ( !empty($_SERVER['REMOTE_ADDR']) ) ?
	            $_SERVER['REMOTE_ADDR']
	            :
	            ( ( !empty($_ENV['REMOTE_ADDR']) ) ?
	               $_ENV['REMOTE_ADDR']
	               :
	               "unknown" );
	   
	      // los proxys van añadiendo al final de esta cabecera
	      // las direcciones ip que van "ocultando". Para localizar la ip real
	      // del usuario se comienza a mirar por el principio hasta encontrar
	      // una dirección ip que no sea del rango privado. En caso de no
	      // encontrarse ninguna se toma como valor el REMOTE_ADDR
	   
	      $entries = split('[, ]', $_SERVER['HTTP_X_FORWARDED_FOR']);
	   
	      reset($entries);
	      while (list(, $entry) = each($entries))
	      {
	         $entry = trim($entry);
	         if ( preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list) )
	         {
	            // http://www.faqs.org/rfcs/rfc1918.html
	            $private_ip = array(
	                  '/^0\./',
	                  '/^127\.0\.0\.1/',
	                  '/^192\.168\..*/',
	                  '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
	                  '/^10\..*/');
	   
	            $found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);
	   
	            if ($client_ip != $found_ip)
	            {
	               $client_ip = $found_ip;
	               break;
	            }
	         }
	      }
	   }
	   else
	   {
	      $client_ip =
	         ( !empty($_SERVER['REMOTE_ADDR']) ) ?
	            $_SERVER['REMOTE_ADDR']
	            :
	            ( ( !empty($_ENV['REMOTE_ADDR']) ) ?
	               $_ENV['REMOTE_ADDR']
	               :
	               "unknown" );
	   }
	   
	   return $client_ip;
	   
	}


}


?>
