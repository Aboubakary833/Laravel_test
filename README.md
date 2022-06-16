## Endpoints

### POST /api/publish/{website_uuid}
<p>Endpoint to create a "post" for a "particular website" by passing the given website unique ID as parameter.</p>
<p>Required fields:</p>
<ul>
    <li>Title</li> 
    <li>Description</li> 
</ul>

### POST /api/subscribe
<p>Endpoint to make a user subscribe to a "particular website".</p>
<p>Required fields:</p>
<ul>
    <li>Name</li> 
    <li>Email</li> 
    <li>website_uuid</li> 
</ul>


## Command to send a test mail to a user


### php artisan sendmail:to {user}
<p>Send a test mail to a user by passing the given user email as argument to the command.</p>
