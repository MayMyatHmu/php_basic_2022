## users table
CREATE TABLE users (
  id INTEGER PRIMARY KEY,
  name varchar(255),
  email varchar(255),
  password varchar(255)
);

## users table data insert
insert into users (id, name, email, password) values (1, 'admin', 'admin@gmail.com', 'admin');
insert into users (id, name, email, password) values (2, 'user', 'user@gmail.com', 'user');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (NULL, 'Ashinindavudha', 'ashin@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (2, 'Mg Mg', 'mgmg@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (3, 'Mg Mg', 'mgmg@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (4, 'May', 'may@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (5, 'Myat', 'myat@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (6, 'Hmue', 'hmue@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (7, 'Shwe', 'Shwe@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (8, 'Si', 'si@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (9, 'Hlaing', 'hlaing@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');

INSERT INTO users (`id`, name, email, password, phone, address, created_at, `updated_at`) VALUES (10, 'Nann', 'Nann@gmail.com', '12345678', '09257031942', 'Mandalay', '2022-05-02 16:13:05.000000', '2022-05-02 16:13:05.000000');