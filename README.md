# Event_Notification_System-GSDC-AITR
This is a full-fledged bulk email sending program which can be used to send customized emails to thousands of users with just a few clicks. This was created as a solution to the problem statement for the selection of new team members in GDSC-AITR club.
{which i lost due to nepotism😂}

#Technologies Used-
## Frontend:
* HTML.
* CSS.
* JavaScript.

## Backend:
* PHP 8
* PHP Mailer Library
* SMTP server with Apache

# Project Description

The program takes a list of people's email addresses in a text file, named recipients.txt, and a pre-made email format named format.html. The name of recipients will be marked as #^receipients in the email format, and the program will automatically replace these variables with the actual name and other details of the recipients. The program will then automatically send the emails to the respective email IDs from an internal mail ID. This makes the process of sending bulk emails much easier and hassle-free.
Usage

### To install and run this program on your local machine, follow these steps:

    * Clone the repository to your local machine.
    * Install XAMPP server from here https://www.apachefriends.org/download.html
    * Update the SMTP server credentials in the process.php file.
    * Upload the recipients.txt file and the format.html file to the uploads directory.
    * Run the program using a local server.

### To use this program, simply follow these steps:

    * Clone the repository to your local machine.
    * Navigate to the cloned directory and open Event_Notifier.php.
    * Upload the recipients.txt file and the format.html file using the file upload forms on the page.
    * Click the "Preview Recipients" button to see a list of recipients and their details.
    * Click the "Preview Format" button to see a preview of the email format.
    * If everything looks good, click the "Send Emails" button to send the emails to the recipients.

Note: Since sending emails is a big part of this program, it requires a PHP library and a whole SMTP server with domain-hosted service. This program uses the online SMTP server service named sendinblue.com's SMTP service. They provide a SMTP host and credentials to use it.
Installation

## Contribution-
This project is open to Contribution.

Happy Hacking!
