-- Run this SQL manually if migration doesn't work
-- This adds the payment_method_account_mapping column to the business table

ALTER TABLE `business` 
ADD COLUMN `payment_method_account_mapping` TEXT NULL 
AFTER `custom_labels`;

