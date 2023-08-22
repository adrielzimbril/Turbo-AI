<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!--[if mso]>
  <xml>
    <o:officedocumentsettings>
      <o:pixelsperinch>96</o:pixelsperinch>
    </o:officedocumentsettings>
  </xml>
  <![endif]-->
  <title>Reset your Password</title>
  <style type="text/css">
    h4 {
      text-align: left;
    }

    @media screen {
      .headerLineTitle {
        width: 1.5in;
        display: inline-block;
        margin: 0in;
        margin-bottom: 0.0001pt;
        font-size: 11pt;
        font-family: "Heebo", "sans-serif";
        font-weight: bold;
      }

      .headerLineText {
        display: inline;
        margin: 0in;
        margin-bottom: 0.0001pt;
        font-size: 11pt;
        font-family: "Heebo", "sans-serif";
        font-weight: normal;
      }

      .pageHeader {
        font-size: 14pt;
        font-family: "Heebo", "sans-serif";
        font-weight: bold;
        visibility: hidden;
        display: none;
      }
    }

    @media print {
      .headerLineTitle {
        width: 1.5in;
        display: inline-block;
        margin: 0in;
        margin-bottom: 0.0001pt;
        font-size: 11pt;
        font-family: "Heebo", "sans-serif";
        font-weight: bold;
      }

      .headerLineText {
        display: inline;
        margin: 0in;
        margin-bottom: 0.0001pt;
        font-size: 11pt;
        font-family: "Heebo", "sans-serif";
        font-weight: normal;
      }

      .pageHeader {
        font-size: 14pt;
        font-family: "Heebo", "sans-serif";
        font-weight: bold;
        visibility: visible;
        display: block;
      }
    }
  </style>
</head>
<body>
<div style="margin: 0 !important; padding: 0 !important;" role="article" aria-roledescription="email" aria-label="Reset your Password" lang="en">
  <table id="m_8954616121124954701body-table" role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 100%; border-spacing: 0; background-color: #ffffff;" bgcolor="#ffffff">
    <tbody>
    <tr>
      <td align="center">
        <table
          id="m_8954616121124954701body-mobile"
          role="presentation"
          border="0"
          cellpadding="0"
          cellspacing="0"
          class="m_8954616121124954701mobile"
          width="610"
          style="width: 610px; border-spacing: 0; background-color: #ffffff;"
          bgcolor="#ffffff"
        >
          <tbody>
          <tr>
            <td align="center">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 100%;">
                <tbody>
                <tr>
                  <td align="center">
                    <table
                      role="presentation"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      width="100%"
                      style="
                                                                    padding-top: 10px;
                                                                    padding-left: 10px;
                                                                    padding-right: 10px;
                                                                    padding-bottom: 10px;
                                                                    width: 100%;
                                                                    border-spacing: 0;
                                                                    border-collapse: initial !important;
                                                                    background-color: #f8f8f8;
                                                                "
                      bgcolor="#f8f8f8"
                    >
                      <tbody>
                      <tr>
                        <td align="center">
                          <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border-spacing: 0; width: 100%;">
                            <tbody>
                            <tr>
                              <td style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; height: 1px;">
                                <table align="center" style="width: 100%;">
                                  <tbody>
                                  <tr>
                                    <td style="width: 188px;" align="center">
                                      <img
                                        src="{{getSetting('logo')}}"
                                        alt=""
                                        border="0"
                                        width="220"
                                        style="display: block; max-width: 220px; width: 100%;"
                                      />
                                    </td>
                                  </tr>
                                  </tbody>
                                </table>
                                <table role="presentation" cellpadding="0" cellspacing="0" style="width: 100%; margin-top: 10px">
                                  <tbody>
                                  <tr>
                                    <td
                                      style="
                                                                                                                font-size: 29px;
                                                                                                                line-height: 1.3;
                                                                                                                text-align: left;
                                                                                                                font-family: Heebo, sans-serif;
                                                                                                                padding-top: 15px;
                                                                                                                padding-left: 15px;
                                                                                                                padding-right: 15px;
                                                                                                                padding-bottom: 0;
                                                                                                            "
                                    >
                                      <div>
                                        <div><br /></div>
                                        <div><span style="font-size: 18px;">Hey, You can now reset your password.</span></div>
                                        <div><br /></div>
                                        <div><span style="font-size: 18px;">You can now reset your password.</span></div>
                                        <div><br /></div>
                                      </div>
                                    </td>
                                  </tr>
                                  </tbody>
                                </table>
                                <table role="presentation" cellpadding="0" cellspacing="0" align="center" width="100%" style="width: 100%; margin-top: 10px; margin-bottom: 20px;">
                                  <tbody>
                                  <tr>
                                    <td align="center">
                                      <div>
                                        <a
                                          href="{{getSetting('site_url')}}/forgot-password/retrieve/{{$user->password_reset_code}}"
                                          style="
                                                                                                                        display: inline-block;
                                                                                                                        text-decoration: none;
                                                                                                                        color: #ffffff;
                                                                                                                        font-size: 17px;
                                                                                                                        line-height: 1.3;
                                                                                                                        font-family: Heebo, sans-serif;
                                                                                                                        font-weight: Bold;
                                                                                                                        font-style: normal;
                                                                                                                        background-color: #9f00de;
                                                                                                                        border-radius: 18px;
                                                                                                                        border-style: none;
                                                                                                                        border-width: 0px;
                                                                                                                        padding-top: 15px;
                                                                                                                        padding-right: 25px;
                                                                                                                        padding-bottom: 15px;
                                                                                                                        padding-left: 25px;
                                                                                                                    "
                                          target="_blank"
                                          rel="noreferrer"
                                        >
                                          Reset Password
                                        </a>
                                      </div>
                                    </td>
                                  </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                </tbody>
              </table>
            </td>
          </tr>
          </tbody>
        </table>
      </td>
    </tr>
    </tbody>
  </table>
</div>
</body>
</html>
