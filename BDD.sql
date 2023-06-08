CREATE TABLE `users` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `last_name` varchar(255),
  `first_name` varchar(255),
  `birthdate` date,
  `email` varchar(255),
  `phone` integer,
  `password` varchar(255)
);

CREATE TABLE `role` (
  `user_id` integer,
  `role_id` integer
);

CREATE TABLE `location` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `price` integer,
  `address` varchar(255),
  `pics` varchar(255),
  `description` varchar(255),
  `max_places` integer,
  `currently_free` boolean,
  `area` float
);

CREATE TABLE `booking` (
  `user_id` integer,
  `old_booking` varchar(255),
  `current_booking` varchar(255),
  `future_booking` varchar(255)
);

CREATE TABLE `location_services` (
  `location_id` integer,
  `service_1` boolean,
  `service_2` boolean,
  `service_3` boolean,
  `service_4` boolean
);

CREATE TABLE `location_occupancy` (
  `user_id` integer,
  `location_id` integer,
  `arrival_date` date,
  `departure_date` date
);

CREATE TABLE `reviews` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `user_id` integer,
  `Review` varchar(255),
  `location_id` integer,
  `created_at` timestamp
);

CREATE TABLE `events` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `date` date
);

CREATE TABLE `location_events` (
  `location_id` integer,
  `event_id` integer
);

ALTER TABLE `reviews` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `role` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `users` ADD FOREIGN KEY (`id`) REFERENCES `booking` (`user_id`);

ALTER TABLE `location` ADD FOREIGN KEY (`id`) REFERENCES `reviews` (`location_id`);

ALTER TABLE `users` ADD FOREIGN KEY (`id`) REFERENCES `location_occupancy` (`user_id`);

ALTER TABLE `location` ADD FOREIGN KEY (`id`) REFERENCES `location_occupancy` (`location_id`);

ALTER TABLE `location` ADD FOREIGN KEY (`id`) REFERENCES `location_events` (`location_id`);

ALTER TABLE `location` ADD FOREIGN KEY (`id`) REFERENCES `location_services` (`location_id`);

ALTER TABLE `events` ADD FOREIGN KEY (`id`) REFERENCES `location_events` (`event_id`);
