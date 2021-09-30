<?php

namespace Database\Seeders;

use App\Models\Piliers;
use App\Models\User;
use Illuminate\Database\Seeder;

class PiliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Piliers::truncate();
        $createur = User::where('id' , 1)->first();

        Piliers::create([
            'titre' => 'Leadership',
            'titre_en' => 'Leadership',
            'contenu' => 'Dans ce pilier, apprenez à développer votre confiance en vous en
            identifiant vos ressources personnelles. Effectuez une analyse à 360°
            de   vous-même   à   l\'aide   de   la   matrice   ERAI   et   découvrez   les
            meilleures pratiques pour vous aider à relever des défis complexes
            et à tirer parti des nouvelles opportunités.
            D\'autres leçons portent sur la gestion du stress, la prise de parole en
            public, la gestion des conflits et l\'intelligence émotionnelle.',
            'contenu_en' => 'In this pillar, learn to develop your self-confidence by
            identifying your personal resources. Conduct a 360° analysis of yourself
            analysis of yourself using the ERAI matrix and discover
            best practices to help you meet complex challenges and take advantage of
            and take advantage of new opportunities.
            Other lessons include stress management, public speaking, conflict management
            conflict management and emotional intelligence..',
            'createur' => $createur->id

        ]);
        Piliers::create([
            'titre' => 'Employabilité et Entrepreneuriat',
            'titre_en' => 'Employability and Entrepreneurship',
            'contenu' => 'Au moyen d\'exemples pratiques et de mini-projets, ce pilier vous
            aide à mieux comprendre les tenants et aboutissants d\'une e-
            réptation ainsi qu\'à maîtriser les outils permettant de la gérer
            efficacement. Vous apprendrez à diagnostiquer votre e-identité, à
            rédiger pièce par pièce un business plan bancable, et à faire un pitch
            parfait.',
            'contenu_en' => 'Through practical examples and mini-projects, this pillar helps you
            help you to better understand the ins and outs of an e-
            reputation as well as mastering the tools to manage it
            effectively. You will learn to diagnose your e-identity, to
            write a bankable business plan, piece by piece, and make a perfect pitch.
            pitch.',
            'createur' => $createur->id
        ]);
        Piliers::create([
            'titre' => 'Ingénierie de l\'apprentissage',
            'titre_en' => 'Engineering of learning',
            'contenu' => '*Nom du formateur* a toujours été passionné par les dynamiques de
            l\'apprentissage. Pour continuer à performer, les leaders doivent
            continuer à apprendre. Dans ce pilier, le formateur explique les
            principes   fondamentaux   de   l\'ingénierie   de   l\'apprentissage.   Il
            démystifie notamment des notions telles que la pensée critique, le
            design thinking et explique comment les adultes apprennent ; en
            décomposant au passages ces notions en clés pratiques que l\'on
            peut   utiliser   pour   améliorer   significativement   sa   capacité
            d\'apprentissage.',
            'contenu_en' => '*Name of trainer* has always been passionate about the dynamics of
            learning dynamics. To continue to perform, leaders must continue to
            continue to learn. In this pillar, the trainer explains the
            In this pillar, the trainer explains the fundamental principles of learning engineering.   He
            demystifies concepts such as critical thinking, design thinking and
            design thinking and explains how adults learn; breaking down
            concepts into practical keys that one can use to significantly improve one',
            'createur' => $createur->id
        ]);
        Piliers::create([
            'titre' => 'Citoyenneté active',
            'titre_en' => 'Active citizenship',
            'contenu' => 'Ce pilier fournit les connaissances de base de la citoyenneté active.
            Il s\'articule autour des avantages d\'un comportement éthique. Grâce
            à des études de cas, il aide l\'individu à acquérir la ligne de conduite
            appropriée lorsqu\'il est confronté à un dilemme éthique. 
            Enfin, il donne un aperçu de l\'importance du networking et fournit
            des outils pour étendre le réseau relationnel de l\'individu.',
            'contenu_en' => 'This pillar provides the basic knowledge of active citizenship.
            It focuses on the benefits of ethical behaviour. Through
            case studies, it helps the individual to acquire the appropriate course of action
            appropriate course of action when faced with an ethical dilemma. 
            Finally, it gives an overview of the importance of networking and provides
            tools to expand the individual',
            'createur' => $createur->id
        ]);
    }
}
