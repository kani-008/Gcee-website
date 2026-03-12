<?php include 'include/header.php'; ?>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <div style="font-size:3rem; margin-bottom:16px; opacity:0.9;"><i class="fas fa-map-marked-alt"></i></div>
        <h1>Location</h1>
    </div>
</div>

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <span>&rsaquo;</span>
        <a href="#">Contact</a>
        <span>&rsaquo;</span>
        <span style="color: var(--text-dark); font-weight:600;">Location</span>
    </div>
</div>

<!-- Main Content -->
<section class="page-content">
    <div class="container">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<div class="headline"><h2>Contact Form</h2></div>
					<p>We are ready to answer your Questions about Institute Of Road and Transport Technology (IRTT). Use this form to tell about your goals and needs.</p>
					<br>

					<form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form sky-changes-3">
						<fieldset>
								<section class="col col-6">
									<label class="label">Name</label>
									<label class="input">
										<i class="icon-append fa fa-user"></i>
										<input type="text" name="name" id="name">
									</label>
								</section>
								<section class="col col-6">
									<label class="label">E-mail</label>
									<label class="input">
										<i class="icon-append fa fa-envelope-o"></i>
										<input type="email" name="email" id="email">
									</label>
								</section>
							</div>

							<section>
								<label class="label">Subject</label>
								<label class="input">
									<i class="icon-append fa fa-tag"></i>
									<input type="text" name="subject" id="subject">
								</label>
							</section>

							<section>
								<label class="label">Message</label>
								<label class="textarea">
									<i class="icon-append fa fa-comment"></i>
									<textarea rows="4" name="message" id="message"></textarea>
								</label>
							</section>

							<!--<section>
								<label class="label">Enter characters below:</label>
								<label class="input input-captcha">
									<img src="assets/plugins/sky-forms-pro/skyforms/captcha/image.php?1773202129" width="100" height="32" alt="Captcha image" />
									<input type="text" maxlength="6" name="captcha" id="captcha">
								</label>
							</section>

							<section>
								<label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my e-mail address</label>
							</section>-->
						</fieldset>

						<!--
    </div>
</section>

<?php include 'include/footer.php'; ?>
