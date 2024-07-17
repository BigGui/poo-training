<?php
spl_autoload_register();

use App\Person\Student;
use App\School\ElementarySchool;
use App\View\Page;

$content = '
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l\'instanciation.
                <br>
                Créer 2 étudiants différents.
            </p>
            <div class="exercice-sandbox">';

                $school1 = new ElementarySchool('Starsky', 'Baycity');

                $stud1Birthdate = new DateTime("1973-6-10");
                $stud2Birthdate = new DateTime("1990/4/5");
                $student1 = new Student('Molotov', 'Zangief',  $stud1Birthdate, "CP", $school1);
                $student2 = new Student('Jones', 'Guile', $stud2Birthdate, "CE2", $school1);
$content .= '
            </div>
        </section>';
$content .= '        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">';
                $student1->setLevel('CM1');

                $student2->setLevel('CE1');
$content .= '
            </div>
        </section>

        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Remplacer la propriété d\'âge par la date de naissance de l\'élève.
                <br>
                Mettez à jour l\'instanciation des 2 élèves et afficher leur date de naissance.
            </p>
            <div class="exercice-sandbox">
                <p>'. $student1->getLastname() . " " . $student1->getBirthDate()->format('Y-m-d') .'</p>
                <p>'. $student2->getLastname() . " " . $student2->getBirthDate()->format('Y-m-d') .'</p>
            </div>
        </section>

        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l\'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <p>J\'ai ' . $student1->getAge() . ' ans.</p>
                <p>J\'ai ' . $student2->getAge() . ' ans.</p>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l\'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">
                <p>L\'élève ' . $student1->getLastname() . ' va à l\'école ' . $student1->getSchool() . '.</p>
                <p>L\'élève ' . $student2->getLastname() . ' va à l\'école ' . $student2->getSchool() . '.</p>
            
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m\'appelle XXX XXX, j\'ai XX ans et je vais à l\'école XXX en class de XXX.".
                <br>
                Afficher la phrase de présentation des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <p>' . $student1->introduceMySelf() . '</p>
                <p>' . $student2->introduceMySelf() . '</p>

            </div>
        </section>
';

$page = new Page([
    'title' => 'POO - Des élèves',
    'titleH1' => 'Programmation Orientée Objet - Des élèves',
    'mainContent' => $content
]);

$page->show();