create table customer_data
(
    id      int auto_increment,
    name    varchar(255) not null,
    email   varchar(255) not null,
    phone   varchar(16)  default null,
    address text         default null,
    constraint customer_data_pk
        primary key (id)
) ENGINE=innoDB DEFAULT CHARSET=latin1;