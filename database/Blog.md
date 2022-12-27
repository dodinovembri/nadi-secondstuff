```sql
CREATE TABLE `blog`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`title` varchar(400) null,
	`image` varchar(256) null,
	`blog_category_id` varchar(36) null,
	`date` date null,
	`author` varchar(256) null,
	`short_description` text NULL,
	`description` text null,
	`tags` text null,
	PRIMARY KEY (`id`)
)
```