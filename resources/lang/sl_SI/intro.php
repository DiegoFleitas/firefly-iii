<?php

/**
 * intro.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    // index
    'index_intro'                           => 'Dobrodošli na osnovni strani Firefly III. Vzemi si čas za sprehod skozi ta uvod, da dobiš občutek, kako Firefly III deluje.',
    'index_accounts-chart'                  => 'Ta diagram prikazuje trenutno stanje tvojih računov sredstev. V nastavitvah lahko izbereš račune, ki so vidni tukaj.',
    'index_box_out_holder'                  => 'To polje in polja poleg tega ti bodo omogočila hiter pregled tvoje finančne situacije.',
    'index_help'                            => 'Če potrebuješ pomoč na strani ali obrazcu, pritisni ta gumb.',
    'index_outro'                           => 'Večina strani Firefly III se bo začela z malo predstavitvijo, kot je ta. Če imaš vprašanja ali pripombe, se obrni name. Uživaj!',
    'index_sidebar-toggle'                  => 'Za ustvarjanje novih transakcij, računov ali drugih stvari uporabi meni pod to ikono.',
    'index_cash_account'                    => 'To so računi, ki so bili ustvarjeni do sedaj. Lahko uporabiš gotovinski račun za sledenje gotovinskih stroškov, vendar to ni obvezno.',

    // transactions
    'transactions_create_basic_info'        => 'Vnesite osnovne podatke o transakciji. Vir, destinacija, datum in opis.',
    'transactions_create_amount_info'       => 'Vnesite znesek transakcije. Po potrebi se bodo polja samodejno posodobila za podatke o znesku v tujini.',
    'transactions_create_optional_info'     => 'Vsa ta polja so neobvezna. Če sem dodate metapodatke, bodo vaše transakcije bolje organizirane.',
    'transactions_create_split'             => 'Če želite razdeliti transakcijo, dodajte več delitev s tem gumbom',

    // create account:
    'accounts_create_iban'                  => 'Svojim računom dodeli veljaven IBAN. To lahko zelo olajša uvoz podatkov v prihodnosti.',
    'accounts_create_asset_opening_balance' => 'Računi sredstev imajo lahko "začetno stanje", kar označuje začetek zgodovine tega računa v Firefly III.',
    'accounts_create_asset_currency'        => 'Firefly III podpira več valut. Računi sredstev imajo eno glavno valuto, ki jo nastaviš tukaj.',
    'accounts_create_asset_virtual'         => 'Včasih lahko računu nastaviš virtualno stanje: dodaten znesek, ki se vedno doda ali odstrani od dejanskega stanja.',

    // budgets index
    'budgets_index_intro'                   => 'Proračuni se uporabljajo za upravljanje tvojih financ in tvorijo eno od ključnih funkcij Firefly III.',
    'budgets_index_set_budget'              => 'Določi svoj celotni proračun za vsako obdobje, tako da ti lahko Firefly III pove, če si predvideli vsa razpoložljiva sredstva.',
    'budgets_index_see_expenses_bar'        => 'Poraba denarja bo počasi zapolnila to vrstico.',
    'budgets_index_navigate_periods'        => 'Krmarjenje po obdobjih omogoča preprosto predčasno nastavitev proračunov.',
    'budgets_index_new_budget'              => 'Ustvari nove proračune, kot se ti zdi primerno.',
    'budgets_index_list_of_budgets'         => 'S to tabelo določi zneske za vsak proračun in si oglej, kako napreduješ.',
    'budgets_index_outro'                   => 'Če želiš izvedeti več o pripravi proračuna, preveri ikono pomoči v zgornjem desnem kotu.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    // reports (index)
    'reports_index_intro'                   => 'S temi poročili dobiš podroben vpogled v svoje finance.',
    'reports_index_inputReportType'         => 'Izberi vrsto poročila. Oglej si strani za pomoč, če želiš videti, kaj ti vsako poročilo prikazuje.',
    'reports_index_inputAccountsSelect'     => 'Račune sredstev lahko izključiš ali vključiš, kot se ti zdi primerno.',
    'reports_index_inputDateRange'          => 'Izbrano časovno obdobje je v celoti odvisno od tebe: od enega dneva do 10 let.',
    'reports_index_extra-options-box'       => 'Glede na izbrano poročilo lahko tukaj izbereš dodatne filtre in možnosti. Opazuj polje, ko spreminjaš vrste poročil.',

    // reports (reports)
    'reports_report_default_intro'          => 'To poročilo vam bo dalo hiter in celovit pregled vaših financ. Če želite videti še kaj drugega, me prosim kontaktirajte!',
    'reports_report_audit_intro'            => 'To poročilo vam bo dalo podrobne vpoglede v vaše račune sredstev.',
    'reports_report_audit_optionsBox'       => 'S temi potrditvenimi polji prikažete ali skrijete stolpce, ki vas zanimajo.',

    'reports_report_category_intro'                  => 'To poročilo vam bo dalo vpogled v eno ali več kategorij.',
    'reports_report_category_pieCharts'              => 'Ti grafikoni vam bodo dali vpogled v odhodke in prihodke glede na kategorijo ali račun.',
    'reports_report_category_incomeAndExpensesChart' => 'Ta grafikon prikazuje vaše stroške in prihodke po kategorijah.',

    'reports_report_tag_intro'                  => 'To poročilo vam bo dalo vpogled v eno ali več oznak.',
    'reports_report_tag_pieCharts'              => 'Ti grafikoni vam bodo dali vpogled v stroške in prihodke na oznako, račun, kategorijo ali proračun.',
    'reports_report_tag_incomeAndExpensesChart' => 'Ta grafikon prikazuje vaše stroške in prihodke po kategorijah.',

    'reports_report_budget_intro'                             => 'To poročilo vam bo dalo vpogled v enega ali več proračunov.',
    'reports_report_budget_pieCharts'                         => 'Ti grafikoni vam bodo dali vpogled v odhodke po proračunih v računu.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Ta grafikon prikazuje vaše stroške po proračunih.',

    // create transaction
    'transactions_create_switch_box'                          => 'Uporabite te gumbe za hitri prekop med tipi transakcij, ki jih želite shraniti.',
    'transactions_create_ffInput_category'                    => 'V to polje lahko prosto pišete. Predhodno ustvarjene kategorije bodo samodejno predlagane.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Povežite svoj dvig s proračunom za boljši finančni nadzor.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Uporabite ta spustni meni, ko je vaš dvig v drugi valuti.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Uporabite ta spustni meni, ko je vaš depozit v drugi valuti.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Izberite hranilnik in to nakazilo povežite s svojimi prihranki.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'V tem polju je prikazano, koliko ste prihranili v posameznem hranilniku.',
    'piggy-banks_index_button'                                => 'Poleg te vrstice napredka sta dva gumba (+ in -) za dodajanje ali odstranjevanje denarja iz vsakega hranilnika.',
    'piggy-banks_index_accountStatus'                         => 'Za vsak račun sredstev z vsaj enim hranilnikom je status naveden v tej tabeli.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    // create piggy
    'piggy-banks_create_name'                                 => 'Kaj je vaš cilj? Nov kavč, kamera, denar za nujne primere?',
    'piggy-banks_create_date'                                 => 'Določite lahko ciljni datum ali rok za vaš hranilnik.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Ta grafikon bo prikazal zgodovino tega hranilnika.',
    'piggy-banks_show_piggyDetails'                           => 'Nekaj podrobnosti o vašem hranilniku',
    'piggy-banks_show_piggyEvents'                            => 'Tukaj so navedeni tudi vsa dodajanja ali odstranitve.',

    // bill index
    'bills_index_rules'                                       => 'Tukaj vidite, katera pravila bodo preverila, ali je to željen račun',
    'bills_index_paid_in_period'                              => 'V tem polju je navedeno, kdaj je bil račun nazadnje plačan.',
    'bills_index_expected_in_period'                          => 'To polje označuje za vsak račun, če in kdaj se pričakuje naslednji račun.',

    // show bill
    'bills_show_billInfo'                                     => 'Ta tabela prikazuje nekaj splošnih informacij o tem računu.',
    'bills_show_billButtons'                                  => 'Uporabite ta gumb za ponovno skeniranje starih transakcij, da se bodo ujemale s tem računom.',
    'bills_show_billChart'                                    => 'Ta grafikon prikazuje transakcije, povezane s tem računom.',

    // create bill
    'bills_create_intro'                                      => 'Uporabite račune za spremljanje zneska denarja, ki ga zapadete v vsakem obdobju. Pomislite na stroške, kot so najemnina, zavarovanje ali hipotekarna plačila.',
    'bills_create_name'                                       => 'Uporabite opisno ime, kot je "Najemnina" ali "Zdravstveno zavarovanje".',
    //'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Izberite najnižji in najvišji znesek za ta račun.',
    'bills_create_repeat_freq_holder'                         => 'Večina računov se ponavlja mesečno, vendar lahko tukaj nastavite drugačno pogostost.',
    'bills_create_skip_holder'                                => 'Če se račun ponavlja vsaka 2 tedna, je treba polje "preskoči" nastaviti na "1", da preskočite vsak drugi teden.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III vam omogoča upravljanje pravil, ki bodo samodejno uporabljena za vsako transakcijo, ki jo ustvarite ali uredite.',
    'rules_index_new_rule_group'                              => 'Za lažje upravljanje lahko pravila združite v skupine.',
    'rules_index_new_rule'                                    => 'Ustvarite poljubno število pravil.',
    'rules_index_prio_buttons'                                => 'Naročite jih tako, kot se vam zdi primerno.',
    'rules_index_test_buttons'                                => 'Svoja pravila lahko preizkusite ali jih uporabite za obstoječe transakcije.',
    'rules_index_rule-triggers'                               => 'Pravila imajo "sprožilce" in "dejanja", ki jih lahko razvrstite tako, da jih povlečete in spustite.',
    'rules_index_outro'                                       => 'Ne pozabite preveriti strani s pomočjo z ikono (?) zgoraj desno!',

    // create rule:
    'rules_create_mandatory'                                  => 'Izberite opisni naslov in nastavite, kdaj naj se pravilo sproži.',
    'rules_create_ruletriggerholder'                          => 'Dodajte poljubno število sprožilcev, vendar ne pozabite, da se morajo VSI sprožilci ujemati, preden se sprožijo kakršna koli dejanja.',
    'rules_create_test_rule_triggers'                         => 'S tem gumbom si oglejte, katere transakcije ustrezajo vašemu pravilu.',
    'rules_create_actions'                                    => 'Nastavite poljubno število dejanj.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    // preferences
    'preferences_index_tabs'                                  => 'Za temi zavihki je na voljo še več možnosti.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III podpira več valut, ki jih lahko spremenite na tej strani.',
    'currencies_index_default'                                => 'Firefly III ima eno privzeto valuto.',
    'currencies_index_buttons'                                => 'S temi gumbi spremenite privzeto valuto ali omogočite druge valute.',

    // create currency
    'currencies_create_code'                                  => 'Ta koda mora biti skladna z ISO (poguglajte jo za vašo novo valuto).',
];
/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */

