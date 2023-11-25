<title>Registration</title>
<div class="scroll">
<div class="form_wrapper">
  <div class="form_container">
    <form action="home/view" method="get">
      <a href="../home"><span><i aria-hidden="true" class="fa fa-chevron-left"></i> Back</span></a>
   </form>
    <div class="title_container">
      <h2>Patient Registration</h2>
    </div>
    <div class="row">
      <div>
        <hr>
      </div>
      <div class="input_title_container">
        <h2>Personal Information</h2>
      </div>
        <form class="fields">
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
            <input type="text" name="Fname" placeholder="First Name" required/>
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
            <input type="text" name="Mname" placeholder="Middle Name" required/>
          </div>          
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
            <input type="text" name="Lname" placeholder="Last Name" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="Sname" placeholder="Suffix Name" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-mobile"></i></span>
            <input type="number" name="Mnum" placeholder="Mobile Number" pattern="[0-9]{11}" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-calendar-o"></i></span>
            <input type="text" placeholder="Date of Birth" onfocus="(this.type='date')" max="2014-12-31" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
            <input type="text" name="Age" placeholder="Age" required />
          </div>
          <div class="input_field">
            <input type="hidden" name="hidden" placeholder="hidden" required />
          </div>
          </form>
          <div>
            <hr>
          </div>
            <div class="input_title_container">
              <h2>Current Address</h2>
            </div>
            <form class="fields">
              <div class="input_field" style="width: 455px;"> <span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
                <input type="text" name="address" placeholder="Address" required />
              </div>
              <!-- <div class="input_field">
                <input type="hidden" name="hidden" placeholder="hidden" required />
              </div>        
              <div class="input_field">
                <input type="hidden" name="hidden" placeholder="hidden" required />
              </div>
              <div class="input_field">
                <input type="hidden" name="hidden" placeholder="hidden" required />
              </div> -->
              </form>
              <div>
                <hr>
              </div>
            <div class="input_title_container">
              <h2>Account Registration</h2>
            </div>
            <form class="fields">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input type="email" name="email" placeholder="Email Address" required/>
              </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                <input type="password" name="pwd" placeholder="Password" required />
              </div>          
              <div class="input_field">
                <input type="hidden" name="hidden" placeholder="hidden" required />
              </div>
              <div class="input_field">
                <input type="hidden" name="hidden" placeholder="hidden" required />
              </div>
              </form>
              <div>
                <hr>
              </div>
            <div class="input_title_container">
              <h2>In case of Emergency</h2>
            </div>
            <form class="fields">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="Ename" placeholder="Name" required/>
              </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-mobile"></i></span>
                <input type="number" name="Enum" placeholder="Mobile Number" pattern="[0-9]{11}" required />
              </div>          
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user-plus"></i></span>
                <input type="text" name="Erel" placeholder="Relationship" required />
              </div>
              <div class="input_field">
                <input type="hidden" name="hidden" placeholder="hidden" required />
              </div>
              </form>
          </div>
          </div>
        </form>
        <div>
          <hr>
        </div>
        <br>
          <div class=" checkbox_option">
            	<input type="checkbox" id="cb1" required />
    			<label for="cb1">I hereby affirm that the information stated above is
            true and correct. I understand that any misrepresentation, false information, or misleading information
            can
            be charged with a criminal act punished by law and subject to any civil penalties.
            <a href="https://privacy.gov.ph/data-privacy-act/">Data Privacy Act of 2012.</a></label>
            </div>
            <br>
          <input class="button" type="submit" value="Register"/>
      </div>
    </div>
  </div>
</div>
</div>