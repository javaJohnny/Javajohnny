<div class="foot" id="contact">
    <div class="contact" style="height:50vh;">
        <div class="contact_msg">
            <h3>Contact Me</h3>
            <p>
                Got a question? Interested in my work? Feedback?<br>
                Send me a message and let me know, I'll respond as soon as possible.
            </p>
            <p class="contact_txt">
                <label for=""><i class="fas fa-phone"></i> Business Phone</label>
                <br>
                <a href="tel:1-587-968-4749">+1(587) - 968 - 4749</a>
            </p>
            <p class="contact_txt">
                <label for=""><i class="fas fa-envelope"></i> Email</label>
                <br>
                <a href="mailto:johrae0901@shaw.ca">johnrae0901@shaw.ca</a>
            </p>
            <p class="contact_txt">
                <label for=""><i class="fab fa-git-square"></i> GitHub</label>
                <br>
                <a href="https://github.com/javaJohnny">www.github.com/javaJohnny</a>
            </p>
        </div>
        <div class="contact_form">
            <!-- @if(count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">X</button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>{{$message}}</strong>
                </div>
            @endif
            <form action="/sendemail" method="post">
                {{csrf_field()}}
                <div class="form_row">
                    <input type="text" name="name" placeholder="Enter Name">
                    <input type="email" name="email" placeholder="Enter Email">
                </div>
                <div class="form_row">
                    <textarea name="message" placeholder="Enter Message"></textarea>
                </div>
                <div class="form_row">
                    <button type="submit" autofocus>Send</button>
                </div>
            </form> -->
        </div>
        <em>Copyright &copy; JJM 2018</em>
    </div>
</div>
