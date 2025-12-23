create table
    erollement (
        id_course int,
        id_user int,
        foreign key (id_course) references course (idc),
        foreign key (id_user) references users (idU)
    );

delete from course
where
    idc between 26 and 75;

alter table users modify password varchar(300);

delete from users
where
    idU = 7;

select distinct
    *
from
    erollement;

select
    course.title,
    count(sections.ids) as total_sections
from
    course
    join sections on sections.idc = course.idc
group by
    course.title
order by
    total_sections desc
limit
    5;

select distinct
from
    erollement;

select
    course.title,
    count(sections.ids) as total_sections
from
    course
    join sections on sections.idc = course.idc
group by
    course.title
order by
    total_sections desc
limit
    5;

select
    course.title as title_course,
    course.description as description_course,
    users.name
from
    erollement
    join course on erollement.id_course = course.idc
    join users on erollement.id_user;

select
    course.*,
    users.*
from
    erollement
    join course on erollement.id_course = course.idc
    join users on erollement.id_user;

alter table erollement add date_inscription datetime default current_timestamp;

select distinct
    users.name,
    users.email
from
    users
    join erollement on users.idU = erollement.id_user
where
    year (erollement.date_inscription) = year (curdate ());

select
    course.title,
    course.created_at
from
    course
    left join erollement on course.idc = erollement.id_course
where
    erollement.id_course = null;

select
    users.name,
    course.title,
    erollement.date_inscription
from
    erollement
    join course on course.idc = erollement.id_course
    join users on users.idU = erollement.id_user
order by
    erollement.date_inscription desc
limit
    3;

select distinct
    course.title as title_course,
    course.description as description_course,
    users.idU
from
    erollement
    join course on erollement.id_course = course.idc
    join users on erollement.id_user
where
    users.idU = 1;