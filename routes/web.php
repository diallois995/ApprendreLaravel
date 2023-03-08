<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;


// Premiere Méthode
// Route::get('/', function () {
//     $jours = ["Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"];
//     return view('base')->with("jours", $jours);
// });

// Route::get('/about', function () {
//     return view('pages/about')
//     ->with("prenom", "Modou")
//     ->with('nom', "Sarr");
// });


// Deuxieme Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->withPrenom("Gnoror")
//     ->withNom("Sarr");
// });


// Troisime Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->with([
//         'prenom' => "Modou",
//         'nom' => "Sarr"
//     ]);
// });


// Quatrime Méthode
// Route::get('/about', function () {
//     $tab = [
//         'prenom' => 'Modou',
//         'nom' => "Sarr"
//     ];
//     $nomComplet = "Issa pouye";
//     return view('pages/about', compact('tab', 'nomComplet'));
// });


// Cinquieme Méthode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "Sarr";
//     $view->prenom = "Fatou";
//     $view->adresse= "Pikine";

//     return $view;
// });

Route::view('/about', 'pages/about');
Route::view('/contact', 'pages/contact');
Route::view('/service', 'pages/service');


Route::get('/', function () {
    // 🌴🌴🌴 Apprendre SQL Brute 🌴🌴🌴
    // Séléctionner la liste des articles
    // $articles = DB::select('select * from articles');

    // Séléctionner le premier article
    // $article = DB::select('select * from articles')[0];
    // dd($article);

    // Séléctionner le premier article
    // $article = DB::select('select * from articles limit 1');
    // dd($article);

    // A partir du 2em article, recuperer 1 articles
    // $article = DB::select('select * from articles limit 1 offset 2');
    // dd($article);

    // Inserer un article : 1ere methode
    // $ok = DB::insert("INSERT INTO articles
    // values(null, :titre, :contenu, :etat,  :date)", [
    //     'titre' => 'Titre4',
    //     'contenu' => 'Contenu4',
    //     'etat' => 1,
    //     'date' => date('Y-m-d H:i:s')
    // ]);
    // dd($ok);

    // Inserer un article : 2eme methode
    // $titre = 'Titre 5';
    // $contenu = 'Contenu 5';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::insert("INSERT INTO articles
    // values(null, :titre, :contenu, :etat,  :date)",
    // compact('titre', 'contenu', 'etat', 'date'));
    // dd($ok);

     // Inserer un article : 3eme methode
    // $titre = 'Titre 6';
    // $contenu = 'Contenu 6';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::insert("INSERT INTO articles values(
    //     null, ?, ?, ?, ?)",
    //     [$titre, $contenu, $etat, $date]
    // );
    // dd($ok);


    // Modifier le titre du deuxieme article
    // $ok = DB::update("UPDATE articles SET titre='Titre 2 modifié' WHERE id =2");
    // dd($ok);

    // Supprimer l'article dont l'id =6
    // $ok = DB::delete("DELETE from articles WHERE id =6");
    // dd($ok);


    // 🌴🌴🌴 Apprendre Fluent Query Builder 🌴🌴🌴
    // Selectionner tous les articles
    // $articles = DB::table('articles')->get('*');
    // $articles = DB::table('articles')->get();
    // dd($articles);

     // Selectionner tous les article (uniquement les colonnes id et titre)
    // $articles = DB::table('articles')->get(['contenu', 'titre']);
    // dd($articles);

    // Selectionner le premier article
    // $article = DB::table('articles')->first();
    // dd($article);

    // Selectionner le premier article
    // $article = DB::table('articles')->first();
    // dd($article);

    // Selectionner le titre du premier article
    // $article = DB::table('articles')->first()->contenu;
    // dd($article);

    // Selectionner le titre du premier article
    // $article = DB::table('articles')->first();
    // dd($article->contenu);

    // Selectionner l'article qui a pour titre "Titre 2"
    // $article = DB::table('articles')->whereId(2)->get();
    // $article = DB::table('articles')->where('id', 2)->get();
    // dd($article);


    // Selectionner tous les articles dont leur id est >= 2
    // $article = DB::table('articles')->where('id', '>', 1)->get();
    // dd($article);

    // Selectionner l'article dont le titre est "Titre 2" et
    // le contenu  "Contenu 2" (Premiere méthode)
    // $article = DB::table('articles')
    //         ->whereTitreAndContenu('Titre 2', 'Contenu 2')
    //         ->get();
    // dd($article);


    // Selectionner l'article dont le titre est "Titre 2" et
    // le contenu  "Contenu 2" (Deuxieme méthode)
    // $article = DB::table('articles')
    //         ->where('titre', 'Titre 2')
    //         ->where('contenu', 'Contenu 2')
    //         ->get();
    // dd($article);


    // Selectionner l'article dont le titre est "Titre 2" ou
    // le contenu  "Contenu 2" (Premiere méthode)
    // $article = DB::table('articles')
    //         ->whereTitreOrContenu('Titre 2', 'Contenu 2')
    //         ->get();
    // dd($article);



    // Selectionner l'article dont le titre est "Titre 2" ou
    // le contenu  "Contenu 2" (Deuxieme méthode)
    // $article = DB::table('articles')
    //         ->where('titre', 'Titre 2')
    //         ->orWhere('contenu', 'Contenu 2')
    //         ->get();
    // dd($article);


    // Selectionner deux articles
    // $article = DB::table('articles')->take(2)->get();
    // dd($article);


    // A partir du deuxieme articles, selectionner 3 articles
    // $article = DB::table('articles')
    //             ->where('id', '>', '2')
    //             ->take(3)
    //             ->get();
    // dd($article);


    // Selectionner tous les articles en faisant un trie ascendant
    //sure le titre
    // $articles1 = DB::table('articles')->orderBy('titre', 'asc')->get();
    // $articles2 = DB::table('articles')->orderBy('titre', 'desc')->get();
    // dump($articles1);
    // dd($articles2);


    // Selectionner tous les articles dont leur id >2
    //en faisant un trie ascendant
    // $articles = DB::table('articles')
    //->where('id', '>', '2')->orderBy('titre', 'asc')->get();
    // dd($articles);


    // Afficher le nombre d'article
    // $articles = DB::table('articles')->count();
    // dd($articles);


    // Inserer 2 article
    // $ok = DB::table('articles')->insert(
    //     [
    //         [
    //             'titre' => 'Titre 8',
    //             'contenu' => 'Contenu 8',
    //             'etat' => 0,
    //             'date' => date('Y-m-d H:i:s')
    //         ],
    //         [
    //             'titre' => 'Titre 9',
    //             'contenu' => 'Contenu 9',
    //             'etat' => 1,
    //             'date' => date('Y-m-d H:i:s')
    //         ]
    //     ]
    // );
    // dd($ok);

    // Modifier le titre et le contenu de l'article dont l'id =2
    // $ok = DB::table('articles')->whereId(2)->update(
    //     [
    //     'titre' => 'BTitre modifié',
    //     'contenu' => 'Contenu 8 modifié',
    //     ]
    // );
    // dd($ok);


    // Supprimer l'article d'id 4
    // $ok = DB::table('articles')->where('id', 4)->delete();
    // dd($ok);


    // 🌴🌴🌴 Apprendre Eloquent (ORM) 🔥🔥🔥🔥🔥 💪🏾💪🏾💪🏾 🌴🌴🌴
    // Recuperer tous les etudiants
    // $etudiants = Etudiant::get();
    // dd($etudiants);

    // Recuperer l'etudiant qui l'id 1
    // $etudiants = Etudiant::find(1);
    // dd($etudiants);


    // Recuperer le nom et le prenom l'etudiant qui a l'id 2
    // $etudiants = Etudiant::whereId(2)->get(['nom', 'prenom']);
    // dd($etudiants);


    // Recuperer le nom et le prenom de l'etudiant dont son
    //prenom est different de "Modou" et son age > 13
    // $etudiants = Etudiant::where('prenom', '!=','Modou')
    //             ->where('age', '>', 13)
    //             ->get(['nom', 'prenom']);
    // dd($etudiants);


    // Recuperer le nom du premier etidiant
    // $nomPremierEtudiant = Etudiant::first()->nom;
    // dd($nomPremierEtudiant);


    // Ajouter un etudiant (Premiere methode)
    // $etudiant = new Etudiant();
    // $etudiant->nom = "Fall";
    // $etudiant->prenom = "Fatou";
    // $etudiant->matricule = "101012";
    // $etudiant->age = 15;
    // $etudiant->save();

    // Ajouter un etudiant (Deuxime methode)
    // $etudiant = new Etudiant(
    //     [
    //         'nom' => "Fall",
    //         'prenom' => "Fatou",
    //         'matricule' => "101012",
    //         'age' = 16,
    //     ]
    //     );
    // $etudiant->save();
// Ajouter un etudiant (Troisieme methode)
$etudiant = Etudiant::create(
    [
        'nom' => "Diop",
        'prenom' => "Mouhammad",
        'matricule' => "101016",
        'age' => 17
    ]
);
   dd("L'edutiant " . $etudiant->prenom . ' ' . $etudiant->nom .
   ' a été crée avec succès !!! ');


    return view('base');
});
