--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- Name: buildings_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE buildings_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE buildings_id_seq OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: buildings; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE buildings (
    id integer DEFAULT nextval('buildings_id_seq'::regclass) NOT NULL,
    name character varying(255),
    address text,
    latitude real,
    langitude real,
    date_added timestamp without time zone DEFAULT now()
);


ALTER TABLE buildings OWNER TO postgres;

--
-- Name: TABLE buildings; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE buildings IS 'main table';


--
-- Name: floors_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE floors_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE floors_id_seq OWNER TO postgres;

--
-- Name: floors; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE floors (
    id integer DEFAULT nextval('floors_id_seq'::regclass) NOT NULL,
    building_id integer,
    name character varying(255),
    date_added timestamp without time zone DEFAULT now()
);


ALTER TABLE floors OWNER TO postgres;

--
-- Name: TABLE floors; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE floors IS 'sub of buildings';


--
-- Name: groups_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE groups_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE groups_id_seq OWNER TO postgres;

--
-- Name: groups; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE groups (
    id integer DEFAULT nextval('groups_id_seq'::regclass),
    name character varying(255),
    role_id integer,
    date_added timestamp without time zone DEFAULT now()
);


ALTER TABLE groups OWNER TO postgres;

--
-- Name: TABLE groups; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE groups IS 'user groups';


--
-- Name: inventory_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE inventory_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE inventory_id_seq OWNER TO postgres;

--
-- Name: inventory; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE inventory (
    id integer DEFAULT nextval('inventory_id_seq'::regclass) NOT NULL,
    building_id integer,
    floor_id integer,
    office_id integer,
    jobname character varying(255),
    engineername character varying(255),
    "from" character varying(255),
    "to" character varying(255),
    brand character varying(255),
    model character varying(255),
    serial character varying(255),
    description character varying(255),
    divestiture character varying(255),
    date_added timestamp without time zone DEFAULT now(),
    type character varying(255),
    sub_type character varying(255)
);


ALTER TABLE inventory OWNER TO postgres;

--
-- Name: TABLE inventory; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE inventory IS 'main inventory table';


--
-- Name: inventory_logs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE inventory_logs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE inventory_logs_id_seq OWNER TO postgres;

--
-- Name: inventory_logs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE inventory_logs (
    id integer DEFAULT nextval('inventory_logs_id_seq'::regclass),
    inventory_id integer,
    image character varying(255),
    description character varying(255),
    date_uploaded timestamp without time zone DEFAULT now()
);


ALTER TABLE inventory_logs OWNER TO postgres;

--
-- Name: TABLE inventory_logs; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE inventory_logs IS 'Log like file info for inventory';


--
-- Name: office_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE office_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE office_id_seq OWNER TO postgres;

--
-- Name: office; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE office (
    id integer DEFAULT nextval('office_id_seq'::regclass) NOT NULL,
    name character varying(255),
    building_id integer,
    floor_id integer,
    date_added timestamp without time zone DEFAULT now()
);


ALTER TABLE office OWNER TO postgres;

--
-- Name: TABLE office; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE office IS 'sub table of buildings';


--
-- Name: roles; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE roles (
    name character varying(255),
    description text,
    date_added timestamp without time zone DEFAULT now(),
    id integer NOT NULL
);


ALTER TABLE roles OWNER TO postgres;

--
-- Name: TABLE roles; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE roles IS 'role previlage to all users';


--
-- Name: roles_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE roles_id_seq OWNER TO postgres;

--
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE roles_id_seq OWNED BY roles.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    username character varying(255),
    password character varying(255),
    language character varying(255),
    email character varying(255),
    group_id integer,
    date_added timestamp without time zone DEFAULT now(),
    id integer NOT NULL,
    active_session integer DEFAULT 0,
    suspended integer DEFAULT 3,
    suspended_start_time timestamp without time zone,
    active_session_time timestamp without time zone
);


ALTER TABLE users OWNER TO postgres;

--
-- Name: TABLE users; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE users IS 'main user table';


--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY roles ALTER COLUMN id SET DEFAULT nextval('roles_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Name: buildings_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY buildings
    ADD CONSTRAINT buildings_pkey PRIMARY KEY (id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

