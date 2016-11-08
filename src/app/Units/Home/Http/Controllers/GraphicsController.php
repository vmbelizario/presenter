<?php

namespace App\Units\Home\Http\Controllers;

use App\Domains\Graphics\LearningCurve;
use App\Domains\Graphics\LearningCurveAll;
use App\Domains\Graphics\Trend;
use Codecasts\Support\Http\Controller;

/**
 * Class GraphicsController.
 */
class GraphicsController extends Controller
{
    public function showGraphicsLcLang()
    {
        $languages = LearningCurveAll::getTopLanguages();

        return view('home::Graphics.learning_curve.languages', compact(['languages']));
    }

    public function showGraphicsLearningCurve($language)
    {
        $language = LearningCurve::where('language.slug', strtolower($language))->first();
        if ($language) {
          return view('home::Graphics.learning_curve.language', compact(['language']));
        }
        abort(404);
    }

    public function showGraphicsStars()
    {
        $repositories = Trend::getMostStaredRepositories();

        return view('home::Graphics.Trends.stars', compact(['repositories']));
    }

    public function showGraphicsForks()
    {
        $repositories = Trend::getMostForkedRepositories();

        return view('home::Graphics.Trends.forks', compact(['repositories']));
    }

}
