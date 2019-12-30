#
#<?php die('Forbidden.'); ?>
#Date: 2019-12-28 06:59:43 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2019-12-28T06:59:43+00:00	INFO 192.168.0.167	update	Update started by user Super User (330). Old version is 3.9.8.
2019-12-28T06:59:48+00:00	INFO 192.168.0.167	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.9.14-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20191228%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20191228T065945Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=19919acfadcfbe8a94f0c9761ad2da6ae0e67caea26a0f0ae84a58200c9aa44f.
2019-12-28T06:59:59+00:00	INFO 192.168.0.167	update	File Joomla_3.9.14-Stable-Update_Package.zip downloaded.
2019-12-28T07:00:00+00:00	INFO 192.168.0.167	update	Starting installation of new version.
2019-12-28T07:00:15+00:00	INFO 192.168.0.167	update	Finalising installation.
2019-12-28T07:00:15+00:00	INFO 192.168.0.167	update	Ran query from file 3.9.8-2019-06-15. Query text: ALTER TABLE `#__template_styles` DROP INDEX `idx_home`;.
2019-12-28T07:00:15+00:00	INFO 192.168.0.167	update	Ran query from file 3.9.8-2019-06-15. Query text: ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id` (`client_id`);.
2019-12-28T07:00:16+00:00	INFO 192.168.0.167	update	Ran query from file 3.9.8-2019-06-15. Query text: ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id_home` (`client_id`, `h.
2019-12-28T07:00:16+00:00	INFO 192.168.0.167	update	Ran query from file 3.9.10-2019-07-09. Query text: ALTER TABLE `#__template_styles` MODIFY `home` char(7) NOT NULL DEFAULT '0';.
2019-12-28T07:00:16+00:00	INFO 192.168.0.167	update	Deleting removed files and folders.
2019-12-28T07:00:18+00:00	INFO 192.168.0.167	update	Cleaning up after installation.
2019-12-28T07:00:18+00:00	INFO 192.168.0.167	update	Update to version 3.9.14 is complete.
