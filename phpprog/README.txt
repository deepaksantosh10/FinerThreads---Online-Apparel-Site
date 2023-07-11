GROUP - 18

TEAM MEMBERS :

DEEPAK SANTOSH R - 20BCE1621
SANJANAA S - 20BCE1876
MADHUMITA K - 20BCE1891


An online Apparel Store Management System has been developed using HTML, CSS, Javascript, PHP and MYSQL.
The main aim of this project is to automate the functionalities of a online user-friendly apparel store. The purpose of this project is to develop a user-friendly interface for the customers 
to explore the products available in the apparel store and buy them according to their choice and preference. The interface also authorizes the admin to manage all the daily transactions, 
adding new clothes, setting up the product offers, and monitoring customer information. 
Through Finerthreads, customers can also shop tailormade apparels which are customized according to the customer's preference and specifications. 

Work completed :
Front-End for the website
Back-End part of the website
Database for the entire website
Validations for the forms
Session Handling
File Upload
Email with attachment using SMTP(PHPmailer)

Languages Used for Front-End: HTML, CSS, Javascript
Languages Used for Back-End: SQL, PHP
Server used: XAMPP

Flow of execution of our website :

Finerthreads Webpage begins with a MAIN page(MAIN.php) where the user can view the layout of our website. 
The MAIN page has two options such as SIGNUP page(SIGNUP.php) for new users who need to create a new account and register and LOGIN page(LOGIN.php) for existing users to login into the website.
The user can either opt to signup or login according to their needs. Under the LOGIN page, there is a FORGOTPASSWORD page(FORGOTPASSWORD.php) which the user can choose if they forget their password. Here, they can create 
a new password and confirm the same password for it to be updated. 
Only when a user logs in or signs up and has successfully created an account, he/she can access the HOME page(HOME.php) of our website. Meanwhile, in the back-end, the database and table is updated with the registration and login details given by the user
The HOME page has all the modules of our website in the navigation bar such as 'TAILOR-MADE', 'OFFERS', 'ABOUT US', 'CONTACT US', 'FEEDBACK', 'ACCOUNT', 'WISHLIST', 'CART', 'FOR HIM', 'FOR HER'.
The customer can read about Finerthreads website in the ABOUT US page.

In the HOME page, for shopping,

CASE1: Suppose the user wants to shop products for women, they can choose the 'FOR HER' button displayed in the HOME page and they will be directed to the PRODUCTS page. Similarly, for men, they can choose 'FOR HIM' button. 
From here, the customer can choose their desired clothes, add them to their shopping cart, add them to the wishlist and select quantity.
CASE2: Suppose if the user wants to customize their clothes, then they can choose the 'TAILOR-MADE' page from the navigation bar and they will be directed to the page which has a form that has to be filled by the user according to their specifications.
The user has to pass all the validations of the form and agree to the terms and conditions. For this module, only Cash On Delivery(COD) mode of payment is applicable. Then he/she has to click on 'Place Order' button which will pop up an alert box and will send an E-mail with attachment to the customer's mail ID. 
The customer will receive a mail with attachments done using PHPMailer from our website's mail once they clicked on Place Order button. Meanwhile, the customer's entered form details will be stored in the Tailor-made Database.


Now, to avail discounts, the customer has to go to the OFFERS page(OFFERS.php) which has a list of currently available offers from which the user can copy the Coupon code and paste it during checkout.

Next, the customer can view their shopping cart by choosing CART page(CART.html) where the products they have selected will display with the total bill amount.
The customer can also view their wishlist items through the WISHLIST page(WISHLIST.html) any time they login to their account.
Once the user decides on buying the products, he/she can proceed to the CHECKOUT page(CHECKOUT.html) where the customer can finish the Payment.
The user can pay through either Cash On Delivery(COD) mode of payment or Card payment(Credit/Debit cards).
Once the user enters their payment details in the form and submits, the details will be stored in the Payment Database.
 
For viewing the customer's account, they can click on ACCOUNT ICON present in the navigation bar which will be directed to the ACCOUNT page(ACCOUNT.php) that will display the particular customer's account information retreived from the DB.

To post queries, the customer can access the CONTACT US page(CONTACTUS.php) which has a form with validations required to be filled by the customer using their contact details regarding their queries. Their responses will be recorded in the contact table in our Database.
To provide feedback, the customer can access the FEEDBACK page(FEEDBACK.php) which contains a form as well, with respective validations to be passed by the user. Then the customer can give their feedback and rating based on their shopping experience at our website 'Finerthreads' which will help us to improve our service. 
Similarly, the feedback submitted by the customers will be stored in the feedback table in the finerthreads DB. 



