<div class="col-md-12" style="background: #5374ec;">
    <form name="contact" method="post" id="form">
        <div class="col-md-12">
            <input type="text" class="form-control style" style="width: 100%;" name="name"
                   placeholder="Name*" required="required">
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control style" name="phone" placeholder="Phone*"
                   id="phone" required="required">
            <label id="error" style="color: red; display: none;"></label>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control style" style="width: 100%;" name="mail"
                   placeholder="Email*" required="required"
                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
        </div>
        <div class="col-md-12">
            <textarea name="des" class="form-control style" style="width: 100%;">WANT TO TELL SOMETHING MORE</textarea>
        </div>
        <div class="col-md-12">
            <input type="checkbox" id="privacy" name="privacy" required="required"> <label
                    style="color: white;">I declare I've read PRIVACY</label>
        </div>
        <div class="col-md-12">
            <input type="submit" class="form-control style" style="margin-bottom: 4%;" name="submit"
                   value="SEND" class="btn">
        </div>
    </form>
</div>