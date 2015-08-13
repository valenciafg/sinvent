select 
	u.*, g.name as group, g.role_id as rol_id, r.name as rol_name,g.application_id as app_id , a.name as app_name
from 
	users u 
left join
	groups g
on
	u.group_id = g.id
left join
	roles r
on
	g.role_id = r.id
left join 
	applications a
on
	g.application_id = a.id
where
	u.username = 'admin'