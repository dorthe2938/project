@extends('layouts.app')

@section('content')

<style>
    .row {
        margin: 0;
    }

    .termsAndCondPage h2 {
        text-align: center;
    }

    .termsAndCondPage h3 {
        font-size: 20px;
    }

    .termsAndCondPage p {
        text-align: justify;
    }
    
    .btnHomePage, .btnTermsAndCond {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
    .btnHomePage a, .btnTermsAndCond a{
        color: #fff;
        font-size: 20px;
    }
    
    .btnTermsAndCond {
        padding: 5px;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="termsAndCondPage">
                <h2>Vilkår og bettingelser</h2>

                <h3>Samtykkeerklæring</h3>
                <p>Jeg accepterer, ved oprettelse af bruger eller login via Facebook, at QuickTa’ kan behandle personoplysninger om mig som nærmere anført i disse vilkår og betingelser og den tilhørende persondatapolitik.
                Jeg kan til enhver tid tilbagekalde samtykket. 
                E-mail og anden elektronisk kommunikation (heraf app) fra QuickTa
                Når du tilmelder dig modtagelse af meddelelser vedrørende tilbud på varer, nyheder, deltagelse i konkurrencer samt servicemeddelelser om din brug af QuickTa via e-mail, sms, mms samt lignende meddelelser, så fremgår detaljerne om den enkelte tilmelding af de specifikke tilmeldingssider. Generelt giver vi dig mulighed for at afgive såvel almindelige kontaktoplysninger som oplysninger om specifikke interesser. Du kan til enhver tid afmelde dig vores elektroniske kommunikation ved at følge afmeldingsinstruktionerne.</p>
                                <h3>Datapolitik</h3>
                <p>Du accepterer, at QuickTa’ behandler dine personoplysninger afgivet i forbindelse med tilmelding til modtagelse af elektronisk kommunikation eller senere ændring heraf, jf. ovenfor, i henhold til denne datapolitik og i overensstemmelse med den til enhver tid gældende persondatalovgivning. Hvis du ikke kan acceptere dette, skal du undlade at meddele os samtykke til at kontakte dig via elektroniske kommunikation.
                    Evt. ændringer til vores datapolitik vil blive offentliggjort på vores hjemmeside.</p>

                <h3>Hvilke personoplysninger behandler QuickTa’?</h3>
                <p>Dagrofa indsamler og behandler oplysninger om dig, når du:
                - giver os oplysninger i forbindelse med, at du opretter eller foretager ændringer på din profil hos os med henblik på at benytte visse ydelser.
                - logger ind med Facebook. Heraf refereres til Facebooks datapolitik. QuickTa’ benytter din data for bedre forståelse af dine valg og heraf personalisere brugeroplevelsen yderligere.</p>

                <h3>Hvad bruger vi dine personoplysninger til?</h3>
                <p>Vi kan bruge dine personoplysninger til at:<br>
                    - registrere og vedligeholde din profil<br>
                - give dig mulighed for at benytte visse serviceydelser eller informere dig om ændringer af en eller flere af serviceydelserne.
                </p>
                <h3>Hvem modtager dine personoplysninger?</h3>
                <p>Vi kan videregive dine personoplysninger til:<br>
                - forretningspartnere med henblik på at registrere og vedligeholde din brugerkonto og for at hjælpe os med at levere varer og serviceydelser til dig. Disse forretningspartnere har tavshedspligt og har ikke tilladelse til at benytte dine personoplysninger til andre formål.
                </p>
                <h3>Hvor lagres dine personoplysninger?</h3>
                <p>Personoplysningerne lagres på servere i Danmark. Nogle personoplysninger administreres af tredjemand (databehandler), som opbevarer og behandler personoplysninger på QuickTa’s vegne i henhold til datapolitik og den gældende lovgivning om beskyttelse af persondata. Vi opbevarer kun personoplysningerne, så længe det er nødvendigt i forhold til de oplyste formål ovenfor. 
                </p>
                <h3>Hvordan beskytter vi personoplysninger?</h3>
                <p>Vi har i overensstemmelse med persondatalovens regler truffet de fornødne tekniske og organisatoriske sikkerhedsforanstaltninger mod, at dine personoplysninger hændeligt eller ulovligt tilintetgøres, fortabes eller forringes samt mod, at de kommer til uvedkommendes kendskab. Vi opbevarer personoplysninger på vores egen server.</p>
                <h3>Adgang til oplysninger</h3>
                <p>Du kan få oplyst, hvilke oplysninger vi har registreret om dig. Hvis du ønsker at modtage en kopi af disse oplysninger, bedes du kontakte os. Du kan få urigtige oplysninger slettet eller korrigeret.
                </p>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="navbar-fixed-bottom">
         <div type="submit" class="btnTermsAndCond">
             <a href="home">
                 <div class="row">
                     <div class="col-xs-2"><</div>
                     <div class="pull-right col-xs-10">Tilbage</div>
                 </div>
             </a>
         </div>         
    </div>
</div>
@endsection