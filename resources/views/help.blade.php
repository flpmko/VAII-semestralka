@extends("layouts.master")
@section('obsah')
    <div class="box-sized">
        <div style="text-align:center">
            <br>
            <h2>Návod ako používať náš firemný web portál</h2>
        </div>

        <!-- úvod -->
        <div class="container box-sized">
            <div class="row box-sized">
                <div class="column-66 box-sized">
                    <h1 class="xlarge-font"><b>Úvod</b></h1>
                    <p style="font-size:20px">
                        Tento návod, alebo pomocný článok ti má pomôcť sa zorientovať
                        na našom firemnom portáli, ukázať ako to tu funguje a poradiť ti
                        ak si s niečím nevieš rady.
                        Pokryjeme všetky taby na hornej lište a tiež podstránky, ktoré sú skryté,
                        resp. sa na ne dostaneš iba prekliknutím z nejakého konkrétneho tabu.
                    </p>
                </div>
                <div class="column-33 box-sized">
                    <img class="image" src="../imgs/help/info.png" alt="info">
                </div>
            </div>
        </div>

        <!-- domov -->
        <div class="container" style="background-color:#f1f1f1">
            <div class="row">
                <div class="column-33 box-sized">
                    <img class="image" src="../imgs/help/home.png" alt="home">
                </div>
                <div class="column-66 box-sized">
                    <h1 class="xlarge-font"><b>Domov</b></h1>
                    <p style="font-size:20px">
                        Na karte domov nájdeš veľmi rýchly a stručný prehľad. Sú tam tvoje posledne
                        vypožičané zariadenia a nevrátené pôžičky. Takto môžeš mať rýchly prehľad
                        o svojich pôžičkách. Je to hlavne dobré na to, aby si nezabúdal vrátiť pôžičky
                        aby sa zariadenia vrátili do skladu a mohol si ich požičať niekto iný.
                    </p>
                </div>
            </div>
        </div>

        <!-- inventár -->
        <div class="container box-sized">
            <div class="row box-sized">
                <div class="column-66 box-sized">
                    <h1 class="xlarge-font"><b>Inventár</b></h1>
                    <p style="font-size:20px">
                        V invertári nájdeš všetky zariadenia, ktorými ako firma disponujeme.
                        Pri každom zariadení sú tiež o ňom vypísané informácie. Veľmi nápomocné
                        je zobrazenie počtu ks v sklade, ktoré zobrazuje aktuálny počet ks daného zariadenia v sklade.
                        Pri každom zariadení sú tiež dve tlačidlá. Jedno na vymazanie zariadenia zo skladu a jedno na úpravu
                        informácií o zariadení. Na tejto karte sú tiež 2 tlačidlá, <b>Pridať</b> a <b>Požičať</b>. Jedno
                        slúži na
                        pridanie nového zariadenia do skladu a druhé na vytvorenie novej pôžičky. Taktiež tu nájdeš
                        vyhľadávanie,
                        pomocou ktorého môžeš rýchlo vyhľadať konkrétne zariadenie.
                    </p>
                </div>
                <div class="column-33 box-sized">
                    <img class="image" src="../imgs/help/inventory.png" alt="inventory">
                </div>
            </div>
        </div>

        <!-- požičanie -->
        <div class="container" style="background-color:#f1f1f1">
            <div class="row">
                <div class="column-33 box-sized">
                    <img class="image" src="../imgs/help/borrow.png" alt="borrow">
                </div>
                <div class="column-66 box-sized">
                    <h1 class="xlarge-font"><b>Vytvorenie pôžičky</b></h1>
                    <p style="font-size:20px">
                        Do vytvorenia pôžičky sa dostaneš po stlačení tlačidla <b>Požičať</b>
                        na karte Inventár. Zobrazí za ti formulár, kde vyplníš na akú akciu
                        si ideš zariadenia vypožičať a následne vyberieš všetky zariadenia 
                        a počet ks daných zariadení, ktoré potrebuješ. Následne je vytvorená pôžička
                        a ty si môžeš ísť vyzdvihnúť zariadenia zo skladu.
                    </p>
                </div>
            </div>
        </div>

        <!-- pridanie nového itemu -->
        <div class="container">
            <div class="row">
                <div class="column-66 box-sized">
                    <h1 class="xlarge-font"><b>Pridanie nového zariadenia</b></h1>
                    <p style="font-size:20px">
                        Pridať nové zariadenie budeš môcť po stlačení tlačidla <b>Pridať</b>
                        na karte Inventár. Následne sa ti zobrazí formulár, kde je potrebné
                        vyplniť všetky povinné polia. Je potrebné tiež nahrať fotografiu zariadenia
                        aby sme vedeli ako vyzerá.
                    </p>
                </div>
                <div class="column-33 box-sized">
                    <img class="image" src="../imgs/help/new-item.png" alt="new-item">
                </div>
            </div>
        </div>

        <!-- úprava zariadenia -->
        <div class="container" style="background-color:#f1f1f1">
            <div class="row">
                <div class="column-33 box-sized">
                    <img class="image" src="../imgs/help/edit-info.png" alt="edit-info">
                </div>
                <div class="column-66 box-sized">
                    <h1 class="xlarge-font"><b>Úprava</b></h1>
                    <p style="font-size:20px">
                        Úprava zariadenia funguje rovnako ako pridanie nového zariadenia, po kliknutí
                        na dané tlačidlo sa zobrazí formulár, kde je možné zmeniť vlastnosti zariadenia
                        a následne ich uložiť.
                    </p>
                </div>
            </div>
        </div>

        <!-- pôžičky -->
        <div class="container">
            <div class="row">
                <div class="column-66 box-sized">
                    <h1 class="xlarge-font"><b>Pôžičky</b></h1>
                    <p style="font-size:20px">
                        Na karte Pôžičky sa nachádza história všetkých tvojich pôžičiek,
                        minulých aj aktuálnych. Pri každej pôžičke je názov, dátum vypožičania,
                         zariadenia, ktoré boli vypožičané a buď je tam tlačidlo vrátiť, ktorým
                         sa pôžička vracia, alebo tlačidlo vráetné, ktoré signalizuje, že pôžička
                         bola vrátená a taktiež sa tam potom nachádza dátum vrátenia.
                    </p>
                </div>
                <div class="column-33 box-sized">
                    <img class="image" src="../imgs/help/rentals.png" alt="rentals">
                </div>
            </div>
        </div>

        <!-- účet -->
        <div class="container" style="background-color:#f1f1f1">
            <div class="row">
                <div class="column-33 box-sized">
                    <img class="image" src="../imgs/help/user.png" alt="user-page">
                </div>
                <div class="column-66 box-sized">
                    <h1 class="xlarge-font"><b>Účet</b></h1>
                    <p style="font-size:20px">
                        Na karte účet sa nachádzajú všetky tvoje osobné informácie, 
                        ktoré si môžeš taktiež zmeniť. Pri vytváraní účtu nemáš možnosť
                        vyplniť všetky informácie, tak prosím venuj trochu času a vyplň
                        tieto informácie neskôr.
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
