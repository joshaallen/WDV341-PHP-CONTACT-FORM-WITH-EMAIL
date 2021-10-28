# **PROJECT: Contact Form with Email**

Most web applications have a contact form. A server side form using PHP is more secure and offers significantly more functionality than an email link. The contents of the form could be loaded into a database and/or sent via an email. 

This assignment creates a simple contact form in HTML. The server side PHP will send the form data to you by using the `PHP mail( )`.  

Your assignment:
  1. Create an HTML form with the following fields:
      * Contact Name:
      * Contact Email Address:
      * A drop down with a list of reasons for contact
      * Comments:
  2. The form page should be formatted and styled as a business web page. You are welcome to use a previous project as the basis for this project.
  3. When the form is submitted it will send the form data to a page called `formHandler.php`.
  4. Implement the `PHP mail()` to do the following things.
  5. The email message will include the information from the form. It will be formatted in a readable, conversation format.
  6. The email message will Include the date of contact in the `mm/dd/yyyy` format.
  7. It will send a confirmation email to the Contact Email Address.
    * This confirms to the customer that you have received the customer's information and will respond to it.
    * This email should be formatted using HTML and CSS.  It should look like it is from the same site as the form page. 
  8. It will also send an email to YOU with the form information.  In this case you are acting as the point of contact for the client.  
     * This email should be formatted as a list showing all information provided by the customer.
     * It should include the date of contact in `mm/dd/yyyy` format.
     * I would recommend using your personal email address. You can use your DMACC address but it may not come through. You could send it to your `email@yourhost.com` and explore that process.
  9. Send a confirmation page back to the client formatted similiar to the confirmation email.



