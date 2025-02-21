<?php

namespace App\DataFixtures;

use App\Entity\AnneeScolaires;
use App\Entity\Cycles;
use App\Entity\Echeances;
use Faker;
use App\Entity\Niveaux;
use App\Entity\Statuts;
use App\Entity\FraisType;
use App\Entity\FraisScolaires;
use App\Entity\FraisTypes;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class Niveaux1erCycleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($niv = 1; $niv <= 6; $niv++) {
            if ($niv == 1) {
                $cycle = $this->getReference('cycle1er_' . $faker->numberBetween(1, 1), Cycles::class);
                $anneeScolaire = $this->getReference('annee_1', AnneeScolaires::class);
                $niveau = new Niveaux();
                $niveau->setDesignation('1ère Année');
                $niveau->setCycle($cycle);
                for ($i = 6; $i <= 13; $i++) {
                    if ($i == 6) {
                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                    } elseif ($i == 7) {
                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }

                        $manager->persist($statut);
                    } elseif ($i == 8) {
                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                    } elseif ($i == 9) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                    } elseif ($i == 10) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }

                        $manager->persist($statut);
                    } elseif ($i == 11) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                    } elseif ($i == 12) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                    } elseif ($i == 13) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                    }
                }
                $manager->persist($niveau);
                $this->addReference('niveau1er_' . $niv, $niveau);
            } elseif ($niv == 2) {
                $cycle = $this->getReference('cycle1er_' . $faker->numberBetween(1, 1), Cycles::class);
                $anneeScolaire = $this->getReference('annee_1', AnneeScolaires::class);
                $niveau = new Niveaux();
                $niveau->setDesignation('2ème Année');
                $niveau->setCycle($cycle);
                for ($i = 1; $i <= 8; $i++) {
                    if ($i == 1) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut2eme_' . $i, $statut);
                    } elseif ($i == 2) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }

                        $manager->persist($statut);
                        $this->addReference('statut2eme_' . $i, $statut);
                    } elseif ($i == 3) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut2eme_' . $i, $statut);
                    } elseif ($i == 4) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut2eme_' . $i, $statut);
                    } elseif ($i == 5) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9), Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut2eme_' . $i, $statut);
                    } elseif ($i == 6) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut2eme_' . $i, $statut);
                    } elseif ($i == 7) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut2eme_' . $i, $statut);
                    } elseif ($i == 8) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                    }
                }
                $manager->persist($niveau);
                $this->addReference('niveau2eme-' . $niv, $niveau);
            } elseif ($niv == 3) {
                $cycle = $this->getReference('cycle1er_' . $faker->numberBetween(1, 1), Cycles::class);
                $anneeScolaire = $this->getReference('annee_1', AnneeScolaires::class);
                $niveau = new Niveaux();
                $niveau->setDesignation('3ème Année');
                $niveau->setCycle($cycle);
                for ($i = 1; $i <= 8; $i++) {
                    if ($i == 1) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut3eme_' . $i, $statut);
                    } elseif ($i == 2) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut3eme_' . $i, $statut);
                    } elseif ($i == 3) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $frais->addAnneeScolaire($anneeScolaire);
                        $frais->setFraisTypes($fraisType);
                        $manager->persist($statut);
                        $this->addReference('statut3eme_' . $i, $statut);
                    } elseif ($i == 4) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut3eme_' . $i, $statut);
                    } elseif ($i == 5) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut3eme_' . $i, $statut);
                    } elseif ($i == 6) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut3eme_' . $i, $statut);
                    } elseif ($i == 7) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut3eme_' . $i, $statut);
                    } elseif ($i == 8) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                    }
                }
                $manager->persist($niveau);
                $this->addReference('niveau3eme-' . $niv, $niveau);
            } elseif ($niv == 4) {
                $cycle = $this->getReference('cycle1er_' . $faker->numberBetween(1, 1), Cycles::class);
                $anneeScolaire = $this->getReference('annee_1', AnneeScolaires::class);
                $niveau = new Niveaux();
                $niveau->setDesignation('4ème Année');
                $niveau->setCycle($cycle);
                for ($i = 1; $i <= 8; $i++) {
                    if ($i == 1) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut4eme_' . $i, $statut);
                    } elseif ($i == 2) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut4eme_' . $i, $statut);
                    } elseif ($i == 3) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut4eme_' . $i, $statut);
                    } elseif ($i == 4) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut4eme_' . $i, $statut);
                    } elseif ($i == 5) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut4eme_' . $i, $statut);
                    } elseif ($i == 6) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut4eme_' . $i, $statut);
                    } elseif ($i == 7) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut4eme_' . $i, $statut);
                    } elseif ($i == 8) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                    }
                }
                $manager->persist($niveau);
                $this->addReference('niveau4eme-' . $niv, $niveau);
            } elseif ($niv == 5) {
                $cycle = $this->getReference('cycle1er_' . $faker->numberBetween(1, 1), Cycles::class);
                $anneeScolaire = $this->getReference('annee_1', AnneeScolaires::class);
                $niveau = new Niveaux();
                $niveau->setDesignation('5ème Année');
                $niveau->setCycle($cycle);
                for ($i = 1; $i <= 8; $i++) {
                    if ($i == 1) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut5eme_' . $i, $statut);
                    } elseif ($i == 2) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut5eme_' . $i, $statut);
                    } elseif ($i == 3) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut5eme_' . $i, $statut);
                    } elseif ($i == 4) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }

                        $frais->addAnneeScolaire($anneeScolaire);
                        $frais->setFraisTypes($fraisType);
                        $manager->persist($statut);
                        $this->addReference('statut5eme_' . $i, $statut);
                    } elseif ($i == 5) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut5eme_' . $i, $statut);
                    } elseif ($i == 6) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut5eme_' . $i, $statut);
                    } elseif ($i == 7) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut5eme_' . $i, $statut);
                    } elseif ($i == 8) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                    }
                }
                $manager->persist($niveau);
                $this->addReference('niveau5eme-' . $niv, $niveau);
            } else {
                $cycle = $this->getReference('cycle1er_' . $faker->numberBetween(1, 1), Cycles::class);
                $anneeScolaire = $this->getReference('annee_1', AnneeScolaires::class);
                $niveau = new Niveaux();
                $niveau->setDesignation('6ème Année');
                $niveau->setCycle($cycle);
                for ($i = 1; $i <= 8; $i++) {
                    if ($i == 1) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut6eme_' . $i, $statut);
                    } elseif ($i == 2) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut6eme_' . $i, $statut);
                    } elseif ($i == 3) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut6eme_' . $i, $statut);
                    } elseif ($i == 4) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut6eme_' . $i, $statut);
                    } elseif ($i == 5) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut6eme_' . $i, $statut);
                    } elseif ($i == 6) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(1000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(15000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $manager->persist($statut);
                        $this->addReference('statut6eme_' . $i, $statut);
                    } elseif ($i == 7) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                        for ($j = 1; $j <= 1; $j++) {
                            $fraisType = new FraisTypes();
                            $fraisType->setPeriode('mensuel');
                            $fraisType->setNiveau($niveau);
                            $fraisType->setStatut($statut);
                            for ($a = 1; $a <= 15; $a++) {
                                $frais = new FraisScolaires();
                                if ($a == 1) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('arriérés');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 2) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Inscription');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 3) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('carnet');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 4) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('Abandon');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(5000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 5) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(0, 0), Echeances::class);
                                    $frais->setDesignation('septembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(12000);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 6) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(1, 1), Echeances::class);
                                    $frais->setDesignation('octobre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 7) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(2, 2), Echeances::class);
                                    $frais->setDesignation('novembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 8) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(3, 3), Echeances::class);
                                    $frais->setDesignation('decembre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 9) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(4, 4), Echeances::class);
                                    $frais->setDesignation('janvier');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 10) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(5, 5), Echeances::class);
                                    $frais->setDesignation('février');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 11) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(6, 6), Echeances::class);
                                    $frais->setDesignation('mars');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 12) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(7, 7), Echeances::class);
                                    $frais->setDesignation('avril');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 13) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(8, 8), Echeances::class);
                                    $frais->setDesignation('mai');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 14) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('juin');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                } elseif ($a == 15) {
                                    $echeance = $this->getReference('mensuelle_' . $faker->numberBetween(9, 9), Echeances::class);
                                    $frais->setDesignation('autre');
                                    $frais->setEcheance($echeance);
                                    $frais->setMontant(0);
                                    $frais->addAnneeScolaire($anneeScolaire);
                                    $frais->setFraisTypes($fraisType);
                                    $manager->persist($frais);
                                }
                            }
                            $manager->persist($fraisType);
                        }
                        $frais->addAnneeScolaire($anneeScolaire);
                        $frais->setFraisTypes($fraisType);
                        $manager->persist($statut);
                        $this->addReference('statut6eme_' . $i, $statut);
                    } elseif ($i == 8) {

                        $statut =  $this->getReference('statut_' . $faker->numberBetween(1, 9),Statuts::class);
                        $niveau->addStatut($statut);
                    }
                }
                $manager->persist($niveau);
                $this->addReference('niveau6eme-' . $niv, $niveau);
            }
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            NiveauxMaternelleFixtures::class,
        ];
    }
}
