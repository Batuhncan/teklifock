<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TEKLİF FORMU</title>
        <style>
    body {
      font-family: sans-serif;
      font-size: 10pt; /* Reduced font size */
      margin: 5mm; /* A4 page margins */
    }
    .flex-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 5px; /* Reduced margin for header */
    }
    .flex-header img {
      max-width: 150px; /* Reduced max width */
      height: auto;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 10px; /* Reduced margin-bottom */
    }
    th, td {
      text-align: left;
      padding: 4px; /* Reduced padding */
      border: 1px solid #ddd;
    }
    .flex-container {
      display: flex;
      justify-content: space-between;
      gap: 5px; /* Reduced gap for less spacing between tables */
      margin-bottom: 10px; /* Reduced margin-bottom */
      align-items: flex-start; /* Align items to the top */
    }
    .flex-container table {
      width: 100%; /* Ensure each table takes full width of its flex item */
    }
    @page {
      size: A4;
      margin: 1mm; /* Reduced page margins */
    }
    .header-table, .content-table {
      page-break-inside: avoid; /* Prevents breaking inside tables */
    }
    .vertical-align {
      vertical-align: top; /* Aligns content to the top of the cell */
    }
    .two-line {
      line-height: 1.2; /* Adjust line-height to fit content */
    }
    .address-details {
      line-height: 1.5; /* Spacing for multi-line address details */
    }
    .right-align {
      text-align: right; /* Aligns text to the right */
    }
    .summary-table {
      margin-top: 10px; /* Space above the summary table */
      width: 30%; /* Width of the summary table */
      float: right; /* Aligns the table to the right */
    }
    .summary-table td {
      border: none; /* Removes border for summary table cells */
    }
    .border-table {
      border: 1px solid #ddd; /* Border around the table */
    }
    .border-table td {
      border: 1px solid #ddd; /* Border for table cells */
    }
        </style>
    </head>
    <body>
        <header>
            <div class="flex-header">
                <img src="{{ asset('ock-logo.jpg') }}" alt="Logo 1">
                <h1>TEKLİF FORMU</h1>
                <img src="{{ asset('sturdy-logo.jpg') }}" alt="Logo 2">
            </div>
            <table class="header-table" style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="width: 20%; text-align: left;">ALICI FİRMA</th>
                        <th style="width: 20%; text-align: left;">ALICI FİRMA</th>
                        <th style="width: 20%; text-align: left;">GÖNDEREN</th>
                        <th style="width: 20%; text-align: left;" colspan="2">İSA ÖZTÜRK</th>
                    </tr>
                    <tr>
                        <th style="width: 20%; text-align: left;">YETKİLİ KİŞİ</th>
                        <th style="width: 20%; text-align: left;">ALICI FİRMA YETKİLİ KİŞİ</th>
                        <th style="width: 20%; text-align: left;">TEKLİF VEREN TEL</th>
                        <th style="width: 20%; text-align: left;">05070616486</th>
                    </tr>
                    <tr>
                        <th style="width: 20%; text-align: left;">TELEFON</th>
                        <th style="width: 20%; text-align: left;">ALICI TEL</th>
                        <th style="width: 20%; text-align: left;">TEKLİF TARİHİ</th>
                        <th style="width: 20%; text-align: left;">24.07.2024</th>
                    </tr>
                    <tr>
                        <th style="width: 20%; text-align: left;">E-MAİL</th>
                        <th style="width: 20%; text-align: left;">
                            <a href="mailto:ALICI EPOSTA">ALICI EPOSTA</a>
                        </th>
                        <th style="width: 20%; text-align: left;">GEÇERLİLİK T.</th>
                        <th style="width: 20%; text-align: left;">26.07.2024</th>
                    </tr>
                    <tr>
                        <th style="width: 20%; text-align: left;">KONU</th>
                        <th style="width: 20%; text-align: left;" colspan="1">FİYAT TEKLİFİ HAKKINDA</th>
                        <th style="width: 20%; text-align: left;">REFERANS NO</th>
                        <th style="width: 20%; text-align: left;">OCK / 24 / 07</th>
                    </tr>
                </thead>
            </table>
        </header>
        <section>
            <table class="content-table" style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="width: 16.66%; text-align: left;">S. NO</th>
                        <th style="width: 16.66%; text-align: left;">KOD NO</th>
                        <th style="width: 16.66%; text-align: left;">MALZEME CİNSİ</th>
                        <th style="width: 16.66%; text-align: left;">MİKTAR</th>
                        <th style="width: 16.66%; text-align: left;">BİRİM FİYAT</th>
                        <th style="width: 16.66%; text-align: left;">TUTAR</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample rows, repeated up to 20 items -->
                    <!-- Adjust rows as needed -->
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <!-- Repeat similar rows for a total of 20 -->
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="flex-container" style="display: flex; justify-content: flex-end;">
            <div style="position: relative; display: flex; width: 30%; float: left; margin-top: -5px;">
                <table class="border-table" style="width: 100%;">
                    <tr>
                        <td>
                            <strong>Toplam</strong>
                        </td>
                        <td>400</td>
                        <td class="right-align">₺</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>KDV %20</strong>
                        </td>
                        <td>80</td>
                        <td class="right-align">₺</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Genel Toplam</strong>
                        </td>
                        <td>480</td>
                        <td class="right-align">₺</td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="flex-container">
            <div style="flex: 1;">
                <table class="border-table">
                    <tr>
                        <th colspan="2">BANKA DETAYLARI</th>
                    </tr>
                    <tr>
                        <td>HESAP İSMİ</td>
                        <td>OCK PLASTİK MAKİNE SANAYİ VE TİCARET LİMİTED ŞİRKETİ</td>
                    </tr>
                    <tr>
                        <td>BANKA</td>
                        <td>QNB FİNANSBANK (TL HESABI)</td>
                    </tr>
                    <tr>
                        <td>HESAP NO</td>
                        <td>108249706</td>
                    </tr>
                    <tr>
                        <td>ŞUBE KODU</td>
                        <td>03663</td>
                    </tr>
                    <tr>
                        <td>IBAN NO</td>
                        <td>TR910011100000000108249706</td>
                    </tr>
                </table>
            </div>
            <div style="flex: 1;">
                <table class="border-table">
                    <tr>
                        <th>NOTLAR</th>
                    </tr>
                    <tr>
                        <td>FİYATLAR 30.07.2024, MESAİ BİTİMİNE KADAR GEÇERLİ DİR.</td>
                    </tr>
                    <tr>
                        <td>ÖDEME PEŞİN DİR.</td>
                    </tr>
                    <tr>
                        <td>TESLİMAT SÜRESİ : 3-4 ARASI</td>
                    </tr>
                    <tr>
                        <td>MALZEMELER İSTANBUL DEPO TESLİMİDİR.</td>
                    </tr>
                </table>
            </div>
        </section>
        <section>
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="width: 50%; text-align: left;">TEKLİF HAZIRLAYAN</th>
                        <th style="width: 50%; text-align: left;">TEKLİF ONAYI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="two-line">İSA ÖZTÜRK</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <br>
                        </td>
                        <td>
                            <br>
                            <br>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <footer>
            <p>OCK PLASTİK MAKİNE SANAYİ VE TİCARET LİMİTED ŞİRKETİ</p>
            <p>UĞUR MUMCU MAH. 2124. Sok. No:7-9 / 5 SULTANGAZİ / İSTANBUL - TÜRKİYE</p>
            <p>Tel : +90 (212) 667 37 05 Web :
                <a href="http://www.sturdymachine.com">www.sturdymachine.com</a> E-mail:
                <a href="mailto:info@sturdymachine.com">info@sturdymachine.com</a>
            </p>
        </footer>
    </body>
</html>
