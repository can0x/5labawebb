DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
                         `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                         `title` varchar(255) NOT NULL,
                         PRIMARY KEY (`id`)
);

INSERT INTO `books` VALUES (1,'Harry Potter and the Order of the Phoenix'),(2,'Animal Farm'),(3,'The Chronicles of Narnia (Publication Order) #1–7'),(4,'J.R.R. Tolkien 4-Product Boxed Set: The Hobbit and The Lord of the Rings'),(5,'The Picture of Dorian Gray');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
                              `id` int unsigned NOT NULL AUTO_INCREMENT,
                              `migration` varchar(255) NOT NULL,
                              `batch` int NOT NULL,
                              PRIMARY KEY (`id`)
);

INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2022_06_24_102958_create_books_table',1);

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
                                          `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                          `tokenable_type` varchar(255) NOT NULL,
                                          `tokenable_id` bigint unsigned NOT NULL,
                                          `name` varchar(255) NOT NULL,
                                          `token` varchar(64) NOT NULL,
                                          `abilities` text,
                                          `last_used_at` timestamp NULL DEFAULT NULL,
                                          `created_at` timestamp NULL DEFAULT NULL,
                                          `updated_at` timestamp NULL DEFAULT NULL,
                                          PRIMARY KEY (`id`),
                                          UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
                                          KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
);
