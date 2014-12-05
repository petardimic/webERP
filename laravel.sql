-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2014 at 11:42 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE IF NOT EXISTS `costumers` (
  `costumer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `costumer_address` text COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `costumer_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_percentage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Discount_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_items`
--

CREATE TABLE IF NOT EXISTS `inventory_items` (
  `item_code` text COLLATE utf8_unicode_ci NOT NULL,
  `part_descriptions` text COLLATE utf8_unicode_ci,
  `bahasa_indonesia_description` text COLLATE utf8_unicode_ci NOT NULL,
  `part_description` text COLLATE utf8_unicode_ci NOT NULL,
  `image_file` text COLLATE utf8_unicode_ci NOT NULL,
  `category` text COLLATE utf8_unicode_ci NOT NULL,
  `economic_order_quantity` int(11) NOT NULL,
  `packaged_volume` int(11) NOT NULL,
  `packaged_gross_weight` int(11) NOT NULL,
  `net_weight` int(11) NOT NULL,
  `units_of_measure` text COLLATE utf8_unicode_ci NOT NULL,
  `assembly_kit` text COLLATE utf8_unicode_ci NOT NULL,
  `current_or_obsolete` text COLLATE utf8_unicode_ci NOT NULL,
  `batch_serial_or_lot_control` text COLLATE utf8_unicode_ci NOT NULL,
  `serialised` text COLLATE utf8_unicode_ci NOT NULL,
  `perishable` text COLLATE utf8_unicode_ci NOT NULL,
  `decimal_places_for_display_quantity` int(11) NOT NULL,
  `bar_code` text COLLATE utf8_unicode_ci NOT NULL,
  `discount_category` text COLLATE utf8_unicode_ci NOT NULL,
  `pan_size` int(11) NOT NULL,
  `shrinkage_factor` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inventory_items`
--

INSERT INTO `inventory_items` (`item_code`, `part_descriptions`, `bahasa_indonesia_description`, `part_description`, `image_file`, `category`, `economic_order_quantity`, `packaged_volume`, `packaged_gross_weight`, `net_weight`, `units_of_measure`, `assembly_kit`, `current_or_obsolete`, `batch_serial_or_lot_control`, `serialised`, `perishable`, `decimal_places_for_display_quantity`, `bar_code`, `discount_category`, `pan_size`, `shrinkage_factor`, `created_at`, `updated_at`) VALUES
('mobile', 'electronics', 'a', 'aaaaa', '', 'Electronics', 2, 2, 2, 2, 'meters', 'Assembly', 'Current', 'No Control', 'YES', 'YES', 3, 'aaaaaaa', '2', 4, 4, '2014-11-18 03:01:28', '2014-11-18 03:01:28'),
('laptop', 'electronics', 'a', 'aaaaa', '', 'Electronics', 2, 2, 2, 2, 'meters', 'Assembly', 'Current', 'No Control', 'YES', 'YES', 3, 'aaaaaaa', '2', 4, 4, '2014-11-18 03:02:03', '2014-11-18 03:02:03'),
('hard_disk', 'electronics', 'a', 'aaaaa', '', 'Electronics', 2, 2, 2, 2, 'meters', 'Assembly', 'Current', 'No Control', 'YES', 'YES', 3, 'aaaaaaa', '2', 4, 4, '2014-11-18 03:02:39', '2014-11-18 03:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `location_code` text COLLATE utf8_unicode_ci NOT NULL,
  `location_name` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_for_deliveries` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address_1` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address_2` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address_3` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address_4` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address_5` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci,
  `telephone` text COLLATE utf8_unicode_ci NOT NULL,
  `facsimile` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `tax` text COLLATE utf8_unicode_ci NOT NULL,
  `default_counter_sales_customer_code` text COLLATE utf8_unicode_ci NOT NULL,
  `counter_sales_branch_code` text COLLATE utf8_unicode_ci NOT NULL,
  `allow_internal_requests` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_code`, `location_name`, `contact_for_deliveries`, `delivery_address_1`, `delivery_address_2`, `delivery_address_3`, `delivery_address_4`, `delivery_address_5`, `country`, `telephone`, `facsimile`, `email`, `tax`, `default_counter_sales_customer_code`, `counter_sales_branch_code`, `allow_internal_requests`) VALUES
('L01', 'L01', 'a', 'a', 'a', 'a', 'a', 'a', NULL, '45', '45', 'yk51294@yahoo.in', 'a', 'aa', 'a', 'YES'),
('L01', 'hyderabad', 'a', 'a', 'a', 'a', 'a', 'a', NULL, '45', '45', 'yk51294@yahoo.in', 'a', 'aa', 'a', 'YES'),
('L02', 'hyderabad', 'a', 'a', 'a', 'a', 'a', 'a', NULL, '45', '455', 'yk51294@yahoo.in', 'a', 'a', 'aa', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_09_17_141105_patients', 1),
('2014_09_17_143202_add_patients', 1),
('2014_09_19_204635_parameters', 1),
('2014_09_21_062129_sales_categories_maintenance', 1),
('2014_09_25_122543_suppliers', 2),
('2014_09_25_151651_category_maintenance', 3),
('2014_09_24_201438_parameters', 4),
('2014_09_26_140338_sales_category_maintenance', 4),
('2014_09_26_153545_inventory_items', 4),
('2014_09_26_170725_suppliers', 5),
('2014_09_26_200315_locations', 5),
('2014_10_06_140837_purchase_order', 6),
('2014_09_20_233552_parameters', 7),
('2014_09_27_134247_locations', 8),
('2014_10_08_201655_purchase_order_items', 8),
('2014_10_09_210307_prices', 8),
('2014_09_17_141105_patients', 1),
('2014_09_17_143202_add_patients', 1),
('2014_09_19_204635_parameters', 1),
('2014_09_21_062129_sales_categories_maintenance', 1),
('2014_09_25_122543_suppliers', 2),
('2014_09_25_151651_category_maintenance', 3),
('2014_09_24_201438_parameters', 4),
('2014_09_26_140338_sales_category_maintenance', 4),
('2014_09_26_153545_inventory_items', 4),
('2014_09_26_170725_suppliers', 5),
('2014_09_26_200315_locations', 5),
('2014_10_06_140837_purchase_order', 6),
('2014_09_20_233552_parameters', 7),
('2014_09_27_134247_locations', 8),
('2014_10_08_201655_purchase_order_items', 8),
('2014_10_09_210307_prices', 8),
('2014_10_09_223723_purchase_order_items', 9),
('2014_10_09_224328_purchase_orders', 9),
('2014_11_01_140153_permissions', 9),
('2014_11_01_163730_costumers', 9),
('2014_11_10_140029_stocks', 9);

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE IF NOT EXISTS `parameters` (
  `default_date_format` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_overdue_deadline` int(11) NOT NULL,
  `second_overdue_deadline` int(11) NOT NULL,
  `default_credit_limit` int(11) NOT NULL,
  `check_credit_limits` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_settles_last_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `romalpa_clause` text COLLATE utf8_unicode_ci NOT NULL,
  `quick_entries` int(11) NOT NULL,
  `frequently_ordered_items` int(11) NOT NULL,
  `sales_order_allows_same_item_multiple_times` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_entry_allows_line_item_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_picking_note_must_be_produced_before_an_order_can_be_delivered` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auto_update_exchange_rates_daily` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `source_exchange_rates_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `format_of_packing_slips` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_orientation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_company_details_on_packing_slips` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `working_days_on_a_week` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dispatch_cut_off_time` int(11) NOT NULL,
  `allow_sales_of_zero_cost_items` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `controlled_items_must_exist_for_crediting` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `do_shipping_calculation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apply_shipping_charges_if_an_order_is_less_than` int(11) NOT NULL,
  `create_debtor_codes_automatically` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_supplier_codes_automatically` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax_authority_reference_name` text COLLATE utf8_unicode_ci NOT NULL,
  `standard_cost_decimal_places` int(11) NOT NULL,
  `number_of_periods_of_stockusage` int(11) NOT NULL,
  `show_order_values_on_grn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `check_quantity_charged_vs_deliver_qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `check_price_charged_vs_order_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allowed_over_charge_proportion` int(11) NOT NULL,
  `allowed_over_receive_proportion` int(11) NOT NULL,
  `purchase_order_allows_same_item_multiple_times` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `automatically_authorise_purchase_orders_if_user_has_authority` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `financial_year_ends_on` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `report_page_length` int(11) NOT NULL,
  `default_maximum_number_of_records_to_show` int(11) NOT NULL,
  `show_stockid_on_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maximum_size_in_kb_of_uploaded_images` int(11) NOT NULL,
  `number_of_month_must_be_shown` int(11) NOT NULL,
  `the_directory_where_images_are_stored` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `the_directory_where_reports_are_stored` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `only_allow_secure_socket_connections` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perform_database_maintenance_at_logon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wiki_application` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wiki_path` text COLLATE utf8_unicode_ci NOT NULL,
  `geocode_customers_and_suppliers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_customer_information` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_supplier_information` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prohibit_gl_journals_to_control_accounts` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inventory_costing_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auto_issue_components` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prohibit_negative_stock` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `months_of_audit_trail_to_retain` int(11) NOT NULL,
  `log_severity_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path_to_log_files` text COLLATE utf8_unicode_ci NOT NULL,
  `controlled_items_defined_at_work_order_entry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auto_create_work_orders` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `factory_manager_email_address` text COLLATE utf8_unicode_ci NOT NULL,
  `purchasing_manager_email_address` text COLLATE utf8_unicode_ci NOT NULL,
  `inventory_manager_email_address` text COLLATE utf8_unicode_ci NOT NULL,
  `using_smtp_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `name` varchar(255) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`name`, `age`, `phone`) VALUES
('yash', '20', '10'),
('patel', '20', '01'),
('yash', '20', '10'),
('patel', '20', '01');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `select_supplier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `item_name`, `select_supplier`, `price`) VALUES
(1, 'laptop', 'Chinu', '45000'),
(2, 'corn', 'yash', ''),
(3, 'Brick', 'Chinu', ''),
(4, 'laptop', 'Chinu', '10'),
(5, 'corn', 'Chinu', '10'),
(6, 'Brick', 'Chinu', '10'),
(7, 'laptop', 'Chinu', '10'),
(8, 'corn', 'Chinu', '10'),
(9, 'Brick', 'Chinu', '10'),
(10, 'aaaa', 'Chinu', '10'),
(11, 'laptop', 'Chinu', '105'),
(12, 'corn', 'Chinu', '5'),
(13, 'Brick', 'Chinu', '5'),
(14, 'laptop', 'Chinu', '105'),
(15, 'corn', 'Chinu', '5'),
(16, 'Brick', 'Chinu', '5'),
(17, 'aaaa', 'Chinu', '5'),
(18, 'mobile', 'Chinu', '5000'),
(19, 'laptop', 'Chinu', '45000'),
(20, 'hard_disk', 'Chinu', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE IF NOT EXISTS `purchase_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `supplier` text COLLATE utf8_unicode_ci NOT NULL,
  `order_date` text COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_status` text COLLATE utf8_unicode_ci NOT NULL,
  `bill` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`id`, `location`, `supplier`, `order_date`, `comments`, `user`, `delivery_status`, `bill`) VALUES
(5, 'los_angeles', 'The_supplier', '15/11/14  04:11:57pm', 'no comments', 'mera_account', 'no', '0'),
(6, 'los_angeles', 'The_supplier', '15/11/14  04:12:14pm', 'no comments', 'mera_account', 'no', '0'),
(7, 'los_angeles', 'The_supplier', '15/11/14  04:12:28pm', 'no comments', 'mera_account', 'no', '135000'),
(8, 'los_angeles', 'The_supplier', '15/11/14  04:16:04pm', 'no comments', 'mera_account', 'no', '45000'),
(9, 'los_angeles', 'The_supplier', '15/11/14  04:19:04pm', 'no comments', 'mera_account', 'no', '45000'),
(10, 'los_angeles', 'supplier1', '15/11/14  04:31:58pm', 'no comments', 'abc', 'no', '180000'),
(11, 'los_angeles', 'supplier1', '16/11/14  07:00:33pm', 'no comments', 'mera_account', 'no', '225000'),
(12, 'los_angeles', 'supplier1', '17/11/14  09:39:27pm', 'no comments', 'cust', 'yes', '0'),
(13, 'las_vegas', 'supplier1', '18/11/14  05:08:19am', 'no comments', 'abc', 'no', ''),
(14, 'las_vegas', 'supplier1', '18/11/14  05:09:00am', 'no comments', 'abc', 'no', ''),
(15, 'las_vegas', 'supplier1', '18/11/14  05:09:29am', 'no comments', 'abc', 'no', ''),
(16, 'las_vegas', 'supplier1', '18/11/14  05:09:58am', 'no comments', 'abc', 'no', ''),
(17, 'las_vegas', 'supplier1', '18/11/14  05:10:21am', 'no comments', 'abc', 'no', ''),
(18, 'las_vegas', 'supplier1', '18/11/14  05:11:04am', 'no comments', 'abc', 'no', ''),
(19, 'las_vegas', 'supplier1', '18/11/14  05:11:12am', 'no comments', 'abc', 'no', ''),
(20, 'las_vegas', 'supplier1', '18/11/14  05:12:18am', 'no comments', 'abc', 'no', '0'),
(21, 'las_vegas', 'supplier1', '18/11/14  05:12:22am', 'no comments', 'abc', 'no', ''),
(22, 'las_vegas', 'supplier1', '18/11/14  05:12:38am', 'no comments', 'abc', 'no', ''),
(23, 'las_vegas', 'supplier1', '18/11/14  05:12:45am', 'no comments', 'abc', 'no', ''),
(24, 'L01', 'supplier1', '18/11/14  02:10:10pm', 'no comments', 'abc', 'no', ''),
(25, 'hyderabad', 'supplier1', '18/11/14  02:12:03pm', 'no comments', 'abc', 'no', ''),
(26, 'hyderabad', 'supplier1', '18/11/14  02:12:08pm', 'no comments', 'abc', 'no', '36000'),
(27, 'hyderabad', 'supplier1', '18/11/14  02:43:35pm', 'no comments', 'yash', 'yes', '25000'),
(28, 'hyderabad', 'supplier1', '18/11/14  02:44:46pm', 'no comments', 'yash', 'yes', '33000'),
(29, 'hyderabad', 'supplier1', '18/11/14  03:12:16pm', 'no comments', 'yash', 'no', '160000');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_items`
--

CREATE TABLE IF NOT EXISTS `purchase_order_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `purchase_order_id` text COLLATE utf8_unicode_ci NOT NULL,
  `item` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `purchase_order_items`
--

INSERT INTO `purchase_order_items` (`id`, `purchase_order_id`, `item`, `quantity`) VALUES
(1, '1', 'laptop', '5'),
(2, '2', 'corn', '5'),
(3, '3', 'laptop', '5'),
(4, '4', 'laptop', '5'),
(5, '1', 'laptop', '5'),
(6, '2', 'laptop', '3'),
(7, '2', 'corn', '4'),
(8, '2', 'Brick', '44'),
(9, '3', 'corn', '4'),
(10, '3', 'laptop', '33'),
(11, '4', 'Brick', '5'),
(12, '5', 'corn', '4'),
(13, '6', 'corn', '5'),
(14, '7', 'corn', '5'),
(15, '7', 'laptop', '3'),
(16, '8', 'laptop', '1'),
(17, '9', 'laptop', '1'),
(18, '10', 'laptop', '4'),
(19, '11', 'laptop', '5'),
(20, '11', 'corn', '3'),
(21, '12', 'Brick', '3'),
(22, '20', 'corn', '2'),
(23, '25', 'mobile', '4'),
(24, '26', 'mobile', '4'),
(25, '26', 'hard_disk', '4'),
(26, '27', 'mobile', '5'),
(27, '28', 'mobile', '5'),
(28, '28', 'hard_disk', '2'),
(29, '29', 'laptop', '3'),
(30, '29', 'mobile', '5');

-- --------------------------------------------------------

--
-- Table structure for table `sales_category_maintenance`
--

CREATE TABLE IF NOT EXISTS `sales_category_maintenance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sub_category` text COLLATE utf8_unicode_ci NOT NULL,
  `active` text COLLATE utf8_unicode_ci NOT NULL,
  `select` text COLLATE utf8_unicode_ci NOT NULL,
  `edit` text COLLATE utf8_unicode_ci NOT NULL,
  `delete` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `sales_category_maintenance`
--

INSERT INTO `sales_category_maintenance` (`id`, `sub_category`, `active`, `select`, `edit`, `delete`, `image`) VALUES
(1, 'Electronics', 'Yes', 'select', 'edit', 'delete', '4like.jpg'),
(6, 'ysah', 'Yes', 'select', 'edit', 'delete', '20140403_231523.jpg'),
(8, 'abcd', 'Yes', 'select', 'edit', 'delete', 'no image'),
(12, 'c', 'Yes', 'select', 'edit', 'delete', 'no image'),
(13, 'd', 'Yes', 'select', 'edit', 'delete', 'no image'),
(19, 'a', 'Yes', 'select', 'edit', 'delete', 'no image'),
(23, 'a', 'Yes', 'select', 'edit', 'delete', 'no image'),
(24, 'xa', 'Yes', 'select', 'edit', 'delete', 'no image'),
(25, 'category', 'Yes', 'select', 'edit', 'delete', 'no image');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Stock_left` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `item_code`, `Stock_left`) VALUES
(5, 'laptop', '47'),
(6, 'hard_disk', '44'),
(7, 'mobile', '27');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `supplier_name` text COLLATE utf8_unicode_ci NOT NULL,
  `add_line1` text COLLATE utf8_unicode_ci NOT NULL,
  `add_line2` text COLLATE utf8_unicode_ci NOT NULL,
  `add_line3` text COLLATE utf8_unicode_ci NOT NULL,
  `add_line4` text COLLATE utf8_unicode_ci NOT NULL,
  `add_line5` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `facsimile` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `supplier_type` text COLLATE utf8_unicode_ci NOT NULL,
  `supplier_since` text COLLATE utf8_unicode_ci NOT NULL,
  `bank_particulars` text COLLATE utf8_unicode_ci NOT NULL,
  `bank_reference` int(11) NOT NULL,
  `bank_acc_number` int(11) NOT NULL,
  `payment_terms` text COLLATE utf8_unicode_ci NOT NULL,
  `factor_company` text COLLATE utf8_unicode_ci NOT NULL,
  `tax_reference` text COLLATE utf8_unicode_ci NOT NULL,
  `supplier_currency` text COLLATE utf8_unicode_ci NOT NULL,
  `remittance_advice` text COLLATE utf8_unicode_ci NOT NULL,
  `tax_group` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `add_line1`, `add_line2`, `add_line3`, `add_line4`, `add_line5`, `country`, `telephone`, `facsimile`, `email`, `url`, `supplier_type`, `supplier_since`, `bank_particulars`, `bank_reference`, `bank_acc_number`, `payment_terms`, `factor_company`, `tax_reference`, `supplier_currency`, `remittance_advice`, `tax_group`) VALUES
(1, 'Chinu', 'aa', 'aa', 'aa', 'aa', 'aa', '', 456, 456, 'yk51294@yahoo.in', 'y@g.com', 'Apple', '01/01/2014', '45', 45665, 4566, 'Payment will be due by every month', 'none', '4566', 'Rupees', '65464', 'Default'),
(2, 'yash', 'aa', 'aa', 'aa', 'aa', 'aa', '', 44, 44, 'yk51294@yahoo.in', '4652', 'Woods', '01/01/2014', '55', 55, 55, 'Payment will be due by every month', 'none', '55', 'Rupees', '55', 'Default'),
(3, 'supplier1', 'aa', 'aa', 'aa', 'aa', 'aa', '', 44, 44, 'yk51294@yahoo.in', '55', 'Woods', '01/01/2014', '55', 55, 55, 'Payment will be due by every month', 'none', '55', 'Rupees', '55', 'Default'),
(4, 'The_supplier', 'aa', 'aa', 'aa', 'aa', 'aa', '', 44, 44, 'yk51294@yahoo.in', '5', 'Woods', '01/01/2014', '44', 44, 44, 'Payment will be due by every month', 'none', '44', 'Rupees', '44', 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `phone`, `code`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'abc', '$2y$10$hbVbi2FFeFVSOxxHy7xk0O455k9G4D24XPuiGtXTdRHUh4KuPF/HO', 'vnprathima@gmail.com', 'customer', '9652010715', '', 'pjpSviVoeCbl1inu1X10GTsfMbE6dTYh8K1bZBAMRqAVfxQyFV5BLyGVNQIs', '2014-08-21 03:42:33', '2014-09-03 01:54:01'),
(6, 'prathima', '$2y$10$ce9JmTcUh1VfMPxdgipx1uJNCUqOu4DkA9PuQ/gDPSn1w1wS79F/K', '', 'salesman', '00000000000', 'De146AAcdqVvlxzShqWf8DSjSPPDhA9RsNfre6wMg7Qj1ST2OYuqXBzP6y72', '', '2014-09-02 06:02:35', '2014-09-02 06:03:07'),
(7, 'yash', '$2y$10$VrJgjpJvS60hyeyHHhG4LOobuDOSwET.aIsYlk9n5aYIM/BA1GYq6', '', 'admin', '', 'HGVV8bJvO9aJkd1EocxF3WR3ntGJ6EgTYJzJkxeeyPg2UVudXq4I6FlifJxq', 'Z5UWWK8OlXbwrr5JjvGMrefBQ0dGBmmlblUrn0AVUpEXtFxVHUskcpNQDink', '2014-09-20 15:35:43', '2014-11-30 00:42:22'),
(8, 'mera_account', '$2y$10$ZVJh4hknQtLzRAFf6zn4v.5DkM0wu0L09XPDgat6mzKyPlGY/Oziy', '', 'customer', '', 'yTGve8VBDphv1fyvkGXtIWfsJheyTHJP8vG569kdPkd8Y0ySrhynma4TG33m', '', '2014-10-14 05:08:48', '2014-10-14 05:08:48'),
(9, 'yash1', '$2y$10$npn3xM3ddlTjhv8L6AYw0.tVH9dM3/2AehB1Das0bLmcP2d./IL0G', '', 'inventory_manager', '', 'bF1Yb5oM8lMeJHkofXFPyj5L2jgzCXopCTaJpnY9ZzflwZM6KQgXsPxxKAuh', 'enlrvxnZpUWUKBjG7kRW5Ias70WqHq5PfAdqF4bBB7w1Vj7TxKSW46NNh8yt', '2014-11-16 01:13:34', '2014-11-18 03:14:06'),
(10, 'cust', '$2y$10$i9F.nECD6Z5VoFbuwhTny.kXfiLcAY7lky5joN7XzDADiFvT5oegW', '', 'customer', '', 'J0QFxv8RkQbgRsQb21ftHBFttkl63yxAJoM2llpUOImJJDxsu9Emu9Db6Hjz', '8WNJhsTHsMLdFSLG0sCSu5sAHuKQmF5jTLI1hwJJNk3ZIW79Fa2PYYVhTsID', '2014-11-16 07:24:19', '2014-11-18 04:14:17'),
(11, 'salesman', '$2y$10$Nj15n5pj9kZvAlYScTOeOeVn4xRAQYR0A9/G4CnOwz5vP3T.6QCQS', '', 'salesman', '', 'lcjXKNLdP8H76MEwCXkxShW561v1QiCxmqblwOMowhyyzMonzmG1Y30df72h', 'Z7XuliUFFduN9WlgqQz19vSkDG9AzQiguMoF3CNUjoA8a3u2o9KkYIyHgeVq', '2014-11-16 07:24:37', '2014-11-18 02:55:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
