<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>قالب ایمیل HTML - Hola</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href='http://fonts.googleapis.com/css?family=Droid+Arabic+Kufi:400,600' rel='stylesheet' type='text/css'>
  <style type="text/css">

	.main_container{
		width: 850px;
		height: 100%;
		background: #f9f9f9;
		overflow: hidden;
		margin: 100px auto 0 auto;
		box-shadow: 0 0 7px #cdcccc;
		direction:rtl;
	}


    html{
        width: 100%;
    }

	body{
        width: 100%;
        margin:0;
        padding:0;
        -webkit-font-smoothing: antialiased;
        mso-margin-top-alt:0px;
        mso-margin-bottom-alt:0px;
        mso-padding-alt: 0px 0px 0px 0px;
        background: #E7E7E7;
    }

    p,h1,h2,h3,h4{
        margin-top:0;
		margin-bottom:0;
		padding-top:0;
		padding-bottom:0;
    }

    table{
        font-size: 14px;
        border: 0;
    }

    img{
    	border: none!important;
    }

  </style>
</head>
<body style="margin: 0; padding: 0;">

	<div class="main_container">


		<!--  features  -->
		<table width="600" align="center" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
			<tbody>

				<!--  sppace  -->
				<tr>
				<td width="100%" height="100"><h1>محصول جدید</h1> </td>
				</tr>

				<!--  feature1  -->


				<!--  feature2  -->
				<tr>
					<td>
						<table width="280" align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
							<tbody>
								<tr>
									<td  style="color: #555; font-family: 'Droid Arabic Kufi', tahoma; font-weight:600; font-size: 20px; text-transform:uppercase; line-height:28px;">{{$name}}  </td>
								</tr>
								<tr>
									<td width="100%" height="40"></td>
								</tr>
								<tr>
									<td style="color: #898989; font-family: 'Droid Arabic Kufi', tahoma; font-size: 16px; line-height:32px;">{{$text}} </td>
								</tr>
							</tbody>
						</table>
						<table width="40" align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
							<tbody>
								<tr>
									<td width="40"></td>
								</tr>
							</tbody>
						</table>
						<table width="280" align="right" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
							<tbody>
								<tr>
									<td width="100%" height="240">
										<img src="{{asset("storage/$picture")}}" alt="" border="0" style="display: block;"/>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td width="100%" height="100"></td>
				</tr>
			</tbody>
		</table>
		<!--  footer  -->
		<table width="100%" bgcolor="#f9823a" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
			<tbody>
				<tr>
					<td>
						<table width="600" align="center" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
							<tbody>
								<tr>
									<td width="100%" height="40px"></td>
								</tr>
								<tr>
									<td>
										<!--  footer logo  -->
										<table  align="left" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
											<tbody>
												<tr>
													<td><img src="img/footer_logo.png" alt="" border="0"/></td>
													<td width="20"></td>
													<td>
														<table cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
															<tr>
																<td width="100%" height="16"></td>
															</tr>
															<tr>
																<td style="color: #fff; font-family: 'Droid Arabic Kufi'; font-size: 12px;">© تمام حقوق محفوظ است</td>
															</tr>
														</table>
													</td>
												</tr>
											</tbody>
										</table>

										<!--  footer social media  -->
										<table align="right" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
											<tbody>
												<tr>
													<td width="100%" height="8"></td>
												</tr>
												<tr>
													<td>
														<a href="{{route('sale')}}">فروشگاه</a>
														&nbsp;&nbsp;&nbsp;&nbsp;
                            	<a href="{{route('index')}}"> اموزشگاه </a>
														&nbsp;&nbsp;&nbsp;&nbsp;
	                          <a href="{{route('contact')}}"> تماس با ما</a>
														&nbsp;&nbsp;&nbsp;&nbsp;

													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td width="100%" height="40px"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<p style="text-align:center; margin: 50px 0; color: #6B6B6B; font-size:13px; font-family: 'Droid Arabic Kufi', tahoma; font-weight:600;"> رایان رهجو </p>

</body>
</html>
