# Event_Notification_System-GSDC-AITR
This is the repository for event notification system i made for selection of new members in My college's Google Student Developer Club, this is a project for web-dev roles selection round 1🔥😎😂

this is 13-08-22 11:22PM , starting the project build.
So as the name suggests, i think the jury wants a system or piece of software that can notify a group of people about a event which is going to happen, as we know we are in a professional environment, the main source of communication, should and must be Email Communication,

# so 
my project will be using email to notify a group of people about the happening of a event.
the Software will take a list of peoples email in a text file, lets call it recipients.txt
then there would be a premade email format , or a form in which there will be invitation text for receipients named as format.txt
the name of receipents will be named as #^ receipients in the email format, then the Programme will automatically replace these variables with the actual name and other details of the receipents.
the software will automatically send the mails to resepected email id's form the internal mail id.
the software will do all these tasks in few clicks, hence making the work easier and hassel free.

# i will be using html&Css to design the Application, and will use php❤ and a little javascript for the backend.
so lets start

things i did-
1.created Event_Notifier.php
2.created a simple html website structure so website gets displayed in browser.
3.created two file upload forms one for recipients_list and one for format in txt file.
4.now creating a php applet to check if both files exists, if not then tell user to upload these files, in Event_notifier.php
5.15-08-2022 10:21PM github push
6.now creating a button enabled php applet to read the reciepents.txt file contents and display them in a new tab/webpage.
also defining the default format.
7.now creating a button enabled php applet to read and display format.txt file contents in a new tab.
8.added #% to store subject in format.txt
9.added DATATIME in format.txt and code to send sending timestamp
----
Now the serious part-
10.to create a uservise preview in format check.php----cosmetic, so later.
11.create the main FINAL-SEND Button , which should process this all and send the mail, for this creating a process.php.
it should have a js browser alert to take confirmation from sender.
12.since sending email is big part, it requires a php library and a whole smtp server with domain hosted service, this project is for demonstration service so
i will be using a online smtp server service named sendinblue.com's stmp service, they provide a smtp host and credientials to use it.
13.also as we are going to use a smtp server, we need external libraries, we will be using and including library named php mailer to handle the mails.
# it is 16/08/2022 03:26AM midnight Raining😂,working because deadline is today 02:00PM, and after this much efforts, i will not leave it😎🔥💣
did these things-
14.initialize email function.-done
15.read format and find variables.-done
16.code to replace #^ with user name.-done
17.code to replace #@ with user email.-done
18.Adding data and time in place of DATATIME.-done
# as of now , the mailer works great, username and email gets seperated, gets correctly replaced , everything working as expected.-git push
01:26PM 16/08/2022
19 updated format.txt to format.html, so it can be displayed nicely in email.
20 used new service form smtp.
21 create to take subject in a form store in subject, subject.txt
22. done , checked creating a release link and submitting.