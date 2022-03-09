<script language="javascript" src="<?php echo $this->config->item('js_path');?>jquery-plugin/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		// validation
		$("#addUser").validate({
			rules: {
				realname: {
					required: true
				},
				username: {
					required: true,
					maxlength: 12
				},
				phone_number: {
					required: true,
					remote: {
						url: "<?php echo site_url('kalkun/phone_number_validation'); ?>",
						type: "get",
						data: {
							phone: function() {
								return $("#phone_number").val();
							}
						}
					}
				},
				password: {
					required: true,
					minlength: 6
				},
				confirm_password: {
					equalTo: "#password"
				}
			},
			messages: {
				realname: {
					required: "<?php echo tr_addcslashes('"', 'Field required.');?>"
				},
				username: {
					required: "<?php echo tr_addcslashes('"', 'Field required.');?>",
					maxlength: "<?php echo tr_addcslashes('"', 'Value is too long.');?>"
				},
				phone_number: {
					required: "<?php echo tr_addcslashes('"', 'Field required.');?>",
				},
				password: {
					required: "<?php echo tr_addcslashes('"', 'Field required.');?>",
					minlength: "<?php echo tr_addcslashes('"', 'Value is too short.');?>"
				},
				confirm_password: {
					equalTo: "<?php echo tr_addcslashes('"', 'Passwords do not match.');?>"
				}
			}
		});

	});

</script>
