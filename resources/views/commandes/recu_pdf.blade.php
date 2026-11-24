@php
    $ref = 'CMD-' . str_pad($commande->id, 6, '0', STR_PAD_LEFT);
    $date = \Carbon\Carbon::parse($commande->date_commande);
@endphp
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Reçu #{{ $ref }}</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 45px 50px 70px 50px;
        }
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            line-height: 1.6;
            color: #111111;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td, th {
            vertical-align: top;
        }
        .right  { text-align: right; }
        .center { text-align: center; }
        .muted  { color: #666666; }
        .bold   { font-weight: bold; }

        /* En-tête */
        .header {
            text-align: center;
            padding-bottom: 16px;
            margin-bottom: 30px;
        }
        .company {
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 4px;
        }

        /* Client / transaction */
        .info {
            margin-bottom: 35px;
        }
        .info td {
            width: 50%;
            padding-right: 20px;
        }
        .label {
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #666666;
            margin-bottom: 5px;
        }

        /* Articles */
        .items {
            margin-bottom: 20px;
        }
        .items th {
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #666666;
            text-align: left;
            padding: 8px 6px;
            border-top: 1px solid #111111;
            border-bottom: 1px solid #111111;
        }
        .items th.right  { text-align: right; }
        .items th.center { text-align: center; }
        .items td {
            padding: 10px 6px;
            border-bottom: 1px solid #DDDDDD;
        }

        /* Totaux */
        .totals {
            width: 45%;
            margin-left: auto;
        }
        .totals td {
            padding: 6px 6px;
        }
        .totals .net td {
            border-top: 1px solid #111111;
            border-bottom: 1px solid #111111;
            font-size: 13px;
            font-weight: bold;
            padding: 9px 6px;
        }

        /* Signature */
        .signature {
            margin-top: 70px;
        }
        .signature td {
            width: 50%;
        }
        .signature .line {
            border-top: 1px solid #111111;
            width: 180px;
            margin-left: auto;
            padding-top: 5px;
            text-align: center;
            font-size: 10px;
            color: #666666;
        }

        /* Pied de page */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            border-top: 1px solid #DDDDDD;
            padding-top: 8px;
            font-size: 9px;
            color: #666666;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="company">REÇU DE PAIEMENT STARADMIN</div>
        <div class="muted">Cotonou, Bénin | star@admin.bj | +229 01 00 00 00 00</div>
        <div class="muted">Commande <span class="bold">N° {{ $ref }}</span> le {{ $date->format('d/m/Y à H:i') }}</div>
    </div>

    <table class="info">
        <tr>
            <td>
                <div class="label">Client</div>
                <div class="bold">{{ $commande->client_nom }}</div>
                <div>{{ $commande->client_email }}</div>
                @if(!empty($commande->client->telephone))
                    <div>{{ $commande->client->telephone }}</div>
                @endif
                @if(!empty($commande->client->adresse))
                    <div>{{ $commande->client->adresse }}</div>
                @endif
            </td>
            <td>
                <div class="label">Transaction</div>
                <div><span class="muted">Commande :</span> {{ $ref }}</div>
                <div><span class="muted">Date :</span> {{ $date->format('d/m/Y') }}</div>
                <div><span class="muted">Articles :</span> {{ $details->sum('quantite') }}</div>
                <div><span class="muted">Devise :</span> XOF (Franc CFA)</div>
            </td>
        </tr>
    </table>

    <table class="items">
        <thead>
            <tr>
                <th style="width: 6%;">N°</th>
                <th style="width: 44%;">Désignation</th>
                <th class="right" style="width: 20%;">Prix unitaire</th>
                <th class="center" style="width: 10%;">Qté</th>
                <th class="right" style="width: 20%;">Montant</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $index => $ligne)
                <tr>
                    <td class="muted">{{ $index + 1 }}</td>
                    <td>{{ $ligne->produit_nom }}</td>
                    <td class="right">{{ number_format($ligne->prix_unitaire, 0, ',', ' ') }} FCFA</td>
                    <td class="center">{{ $ligne->quantite }}</td>
                    <td class="right">{{ number_format($ligne->prix_unitaire * $ligne->quantite, 0, ',', ' ') }} FCFA</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="totals">
        <tr>
            <td class="muted">Sous-total</td>
            <td class="right">{{ number_format($commande->montant, 0, ',', ' ') }} FCFA</td>
        </tr>
        <tr class="net">
            <td>Net à payer</td>
            <td class="right">{{ number_format($commande->montant, 0, ',', ' ') }} FCFA</td>
        </tr>
    </table>

    <div class="signature">
        <br><br><br><br><br>
        <div class="line">Cachet</div>
    </div>

    <div class="footer">
        Document généré le {{ now()->format('d/m/Y à H:i') }} | Merci pour votre confiance
    </div>

</body>
</html>