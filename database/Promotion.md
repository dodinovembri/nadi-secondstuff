```sql
CREATE TABLE `promotion`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
    `name` varchar(256) NULL,
	`image` varchar(256) NULL,
	`text1` varchar(256) null,
	`text2` varchar(256) null,
	`text_button` varchar(256) null,
	`text_link` varchar(256) null,
	PRIMARY KEY (`id`)
)
```