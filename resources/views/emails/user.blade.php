@extends('layouts.email')


@section('content')

<!DOCTYPE html>
    <!--[if IE]><div class="ie-browser"><![endif]-->
    <table bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;" width="100%">
      <tbody>
        <tr style="vertical-align: top;" valign="top">
          <td style="word-break: break-word; vertical-align: top;" valign="top">
            <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#FFFFFF"><![endif]-->
            <div style="background-color:#ffffff;">
              <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 780px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#ffffff;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:780px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
                  <!--[if (mso)|(IE)]><td align="center" width="780" style="background-color:transparent;width:780px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:25px; padding-bottom:25px;background-color:#3e4c69;"><![endif]-->
                  <div class="col num12" style="min-width: 320px; max-width: 780px; display: table-cell; vertical-align: top; width: 780px;">
                    <div style="background-color:#3e4c69;width:100% !important;">
                      <!--[if (!mso)&(!IE)]><!-->
                      <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:25px; padding-bottom:25px; padding-right: 0px; padding-left: 0px;">
                        <!--<![endif]-->
                        <div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;">
                          <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]-->
                            <a href="https://parcel.one/" target="_blank"><img align="center" alt="" border="0" class="center fixedwidth" src="{{asset('img/logo.png')}}" style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 195px; display: block;" title="" width="195"></a> <!--[if mso]></td></tr></table><![endif]-->
                        </div><!--[if (!mso)&(!IE)]><!-->
                      </div><!--<![endif]-->
                    </div>
                  </div><!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                  <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
              </div>
            </div>
            <div style="background-color:transparent;">
              <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 780px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:780px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
                  <!--[if (mso)|(IE)]><td align="center" width="780" style="background-color:transparent;width:780px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 50px; padding-left: 50px; padding-top:30px; padding-bottom:30px;background-color:#f6f6f6;"><![endif]-->
                  <div class="col num12" style="min-width: 320px; max-width: 780px; display: table-cell; vertical-align: top; width: 780px;">
                    <div style="background-color:#f6f6f6;width:100% !important;">
                      <!--[if (!mso)&(!IE)]><!-->
                      <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 50px; padding-left: 50px;">
                        <!--<![endif]-->
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
                        <div style="color:#661600;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                          <div style="line-height: 1.2; font-size: 14px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #661600; mso-line-height-alt: 14px;">
                            <p style="font-size: 14px; line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: 17px; margin: 0;">
                              <strong>Deine Kundennummer: {{$user['id']}}</strong>
                            </p>
                          </div>
                        </div><!--[if mso]></td></tr></table><![endif]-->
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
                        <div style="color:#3e4c69;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                          <div style="line-height: 1.2; font-size: 14px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #3e4c69; mso-line-height-alt: 14px;">
                            <p style="text-align: center; font-size: 28px; line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: 34px; margin: 0;">
                              <span style="font-size: 28px;">Danke, dass Du dich bei PARCEL.ONE<br> registriert hast!</span><br>
                            </p>
                          </div>
                        </div><!--[if mso]></td></tr></table><![endif]-->
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif"><![endif]-->
                        <div style="color:#555555;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                          <div style="line-height: 1.2; font-size: 14px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #555555; mso-line-height-alt: 14px;">
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              Liebe(r) {{$user['form'][6]->value}},
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              &nbsp;
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              wir freuen uns, Dich als PARCEL.ONE Neukunden begrüßen zu dürfen. Deine Kundennummer lautet KD{{$user['id']}} - für die Kommunikation mit uns ist diese sehr wichtig.
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              &nbsp;
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              Für die Anbindung von PARCEL.ONE, wird sich unser IT-Techniker in den nächsten Tagen bei Dir melden. Danach kannst Du mit dem Versand starten.
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              &nbsp;
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              Im Anhang findest Du ein vorgefertigtes SEPA-Mandat. Wir bitten um Überprüfung, Unterschrift und schnellstmögliche Rücksendung per E-Mail. Leite bitte das Original SEPA-Mandat an Deine Bank weiter. 
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              &nbsp;
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              Bitte schicke Deine PARCEL.ONE-Sendungen künftig an diese Adresse:
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              &nbsp;
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: bold;">
                              PARCEL.ONE GmbH<br>
                              Cross-Border-Logistics<br>
                              Otto-Hahn-Str. 21<br>
                              35510 Butzbach<br>
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              &nbsp;
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              Bei weiteren Fragen sind wir gerne für Dich da! Auf Gute Zusammenarbeit!
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              &nbsp;
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              Schöne Grüße
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              &nbsp;
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              Dein PARCEL.ONE-Team
                            </p>
                          </div>
                        </div><!--[if mso]></td></tr></table><![endif]-->
                         <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
                          <div style="color:#661600;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                            <div style="line-height: 1.2; font-size: 14px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #661600; mso-line-height-alt: 14px;">
                              <p style="font-size: 14px; line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: 17px; margin: 0;">
                                {{-- <strong>Rechnungsadresse</strong> --}}
                              </p>
                            </div>
                          </div><!--[if mso]></td></tr></table><![endif]-->
                          {{-- @foreach ($user['form'] as $field)
                            @if($field['value'] != null)
                            <div style="font-size:16px;text-align:center;font-family:Arial, Helvetica Neue, Helvetica, sans-serif">
                              <div class="block" style="border: solid 1px #3e4c69;border-radius: 3px;margin-bottom: 20px;">
                                <div class="field" style="background-color: #3e4c69;text-align: left;color: #ffffff;padding: 10px;font-size: 16px;">
                                  {{$field->field->first()['name']}}
                                </div>
                                <div class="text" style="background-color: #ffffff;text-align: left;padding: 10px;font-size: 16px;color: #737373;">
                                  @if($field->field->first()['type'] == 'select')
                                    @foreach($field->field->first()->option as $option)
                                      @if($option->id == $field['value'])
                                        {{$option->name}}
                                      @endif
                                    @endforeach
                                  @else
                                    {{$field['value']}}
                                  @endif
                                </div>
                              </div>
                            </div>
                            @endif
                          @endforeach --}}
                          <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif"><![endif]-->
                        {{-- <div style="color:#555555;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                          <div style="line-height: 1.2; font-size: 14px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #555555; mso-line-height-alt: 14px;">
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                              Deine Registrierung wird aktuell bearbeitet. Wende dich bitte bei Fragen oder <br>Vertragsänderungen an unseren Kunden-Support.
                            </p>
                          </div>
                        </div> --}}
                        <div style="color:#555555;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                          <div style="line-height: 1.2; font-size: 14px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #555555; mso-line-height-alt: 14px;">
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: bold;">
                              Anhang
                            </p>
                            <p style=" line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              Zusammenfassung
                            </p>
                            <p style="line-height: 1.2; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0; font-weight: normal;">
                              SEPA-Mandat
                            </p>
                          </div>
                        </div>
                        <!--[if mso]></td></tr></table><![endif]-->
                        <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" width="100%">
                          <tbody>
                            <tr style="vertical-align: top;" valign="top">
                              <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" width="100%">
                                  <tbody>
                                    <tr style="vertical-align: top;" valign="top">
                                      <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top">
                                        <span></span>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table><!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif"><![endif]-->
                        <!--[if mso]></td></tr></table><![endif]-->
                        <!--[if (!mso)&(!IE)]><!-->
                      </div><!--<![endif]-->
                    </div>
                  </div><!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                  <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
              </div>
            </div>
            <div style="background-color:transparent;">
              <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 780px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:780px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
                  <!--[if (mso)|(IE)]><td align="center" width="780" style="background-color:transparent;width:780px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:10px;background-color:#3e4c69;"><![endif]-->
                  <div class="col num12" style="min-width: 320px; max-width: 780px; display: table-cell; vertical-align: top; width: 780px;">
                    <div style="background-color:#3e4c69;width:100% !important;">
                      <!--[if (!mso)&(!IE)]><!-->
                      <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:20px; padding-bottom:10px; padding-right: 0px; padding-left: 0px;">
                        <!--<![endif]-->
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif"><![endif]-->
                          <div style="color:#555555;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;line-height:1.5;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                            <div style="line-height: 1.5; font-size: 14px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #555555; mso-line-height-alt: 18px;">
                              <p style="text-align: center; line-height: 1.5; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                <span style="color: #ffffff;">PARCEL.ONE GmbH</span><br>
                                <span style="color: #ffffff;">Otto-Hahn-Strasse 21</span><br>
                                <span style="color: #ffffff;">35510 Butzbach</span>
                              </p>
                              <p style="text-align: center; line-height: 1.5; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                &nbsp;
                              </p>
                              <p style="text-align: center; line-height: 1.5; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                <span style="color: #ffffff;">Telefon +49 6033 352250</span><br>
                                <span style="color: #ffffff;">Email info@parcel.one</span><br>
                                <span style="color: #ffffff;">www.parcel.one</span><br>
                                <span style="color: #ffffff;">Geschäftsführer: Micha Augstein</span>
                              </p>
                              <p style="text-align: center; line-height: 1.5; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                &nbsp;
                              </p>
                              <p style="text-align: center; line-height: 1.5; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                <span style="color: #ffffff;">Amtsgericht Friedberg HRB8537</span><br>
                                <span style="color: #ffffff;">Sitz der Gesellschaft ist Butzbach</span><br>
                                <span style="color: #ffffff;">UST-ID: DE312186140</span><br>
                                <span style="color: #ffffff;">Verantwortlicher i. S. d. § 55 Abs. 2 RStV Micha Augstein</span>
                              </p>
                            </div>
                          </div><!--[if mso]></td></tr></table><![endif]-->
                        <!--[if (!mso)&(!IE)]><!-->
                      </div><!--<![endif]-->
                    </div>
                  </div><!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                  <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
              </div>
            </div><!--[if (mso)|(IE)]></td></tr></table><![endif]-->
          </td>
        </tr>
      </tbody>
    </table><!--[if (IE)]></div><![endif]-->
@endsection