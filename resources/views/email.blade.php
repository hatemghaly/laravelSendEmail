<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body >
<div class="container">
	<div class="row ">
      <div class="col-md-12">
        <div class="well well-sm">
          <form class="form-horizontal" action="/postEmail" method="post">
          {{csrf_field()}}
          <fieldset>
            <legend class="text-center">Contact us</legend>
    
           <!-- Name input-->
           <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your Name</label>
              <div class="col-md-12">
                <input id="email" name="name" type="text" placeholder="Your Name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-12">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
             <!-- Subject input-->
             <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your Subject</label>
              <div class="col-md-12">
                <input id="email" name="subject" type="text" placeholder="Your Subject" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-12">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-left">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
            <tr>
<td class="aligncenter content-block">Developed , By Hatem Ghaly , <a href="mailto:hatem230@yahoo.com">hatem230@yahoo.com</a> , +201148699647</td>
</tr>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
</body>
</html>