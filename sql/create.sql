create table tk_accounts(
name varchar(50) not null,
abi text,
created_at datetime NOT NULL,
updated_at datetime NOT NULL,
PRIMARY KEY (`name`)
);

create table tk_transactions(
id varchar(64) not null,
block_id int not null,
ref_block_prefix int not null,
expiration datetime NOT NULL,
pending boolean NOT NULL,
num_actions int not null,
created_at datetime NOT NULL,
updated_at datetime NOT NULL,
PRIMARY KEY (`id`)
);

create table tk_blocks(
id  int(11) NOT NULL AUTO_INCREMENT COMMENT '自增变量序号',
block_number int not NULL,
prev_block_id varchar(64) not NULL,
irreversible boolean not NULL,
`timestamp` timestamp not NULL,
transaction_merkle_root varchar(64) not NULL,
action_merkle_root varchar(64) not null,
producer varchar(50) not NULL,
numTrasactions int not NULL,
version int not NULL,
new_producers text  NULL,
num_transactions int not null,
confirmed int not NULL,
primary key(`id`)
);

create table tk_actions(
`id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增变量序号',
seq int NOT NULL,
account varchar(50) NOT NULL,
transaction_id varchar(64) not null,
data text,
name varchar(100) NOT NULL,
created_at datetime NOT NULL,
PRIMARY KEY (`id`)
);

create table tk_actions_accounts(
action_id int NOT NULL,
actor varchar(50) NOT NULL,
permission varchar(100) NOT NULL,
primary key(action,actor,permission)
);

create table tk_votes(
account varchar(100) NOT NULL,
votes text NOT NULL,
primary key(account)
);

