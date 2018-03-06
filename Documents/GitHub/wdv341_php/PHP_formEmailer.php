<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form Processing</title>
</head>

<body>

<h2>Contact Form</h2>

<form action="Formprocessor.php" method="POST" name="contactForm" >
  <p>&nbsp;</p>
  <p>
    <label>Your Name:
      <input type="text" name="contactName" id="contactName" placeholder="Name">
    </label>
  </p>
  <p>Your Email: 
    <input type="email" name="contactEmail" id="contactEmail" placeholder="Email">
  </p>
  <p>Reason for contact: 
    <label>
      <select name="contactReason" id="contactReason">
        <option value="default">Please Select a Reason</option>
        <option value="product">Product Problem</option>
        <option value="return">Return a Product</option>
        <option value="billing">Billing Question</option>
        <option value="technical">Report a Website Problem</option>
        <option value="other">Other</option>
      </select>
    </label>
  </p>
  <p>
    <label>Comments:
      <textarea name="contactComments" id="contactComments" cols="45" rows="5" placeholder="Comments:"></textarea>
    </label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="mailingList" id="mailingList" checked>
      Please put me on your mailing list.</label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="moreInformation" id="moreInformation" checked>
      Send me more information</label>
  about your products.  </p>
  <p>
    <input type="hidden" name="hiddenField" id="hiddenField" value="application-id:US447">
  </p>
  <p>
    <input type="submit" name="submit" id="submitForm" value="Submit">
    <input type="reset" name="reset" id="resetForm" value="Reset">
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>
