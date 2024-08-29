<?php

namespace App\Controllers\NewUser;

use App\Models\KategoriVideoModels;
use App\Models\TentangModels;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    protected $layoutData;
    protected $categories;

    public function __construct()
    {
        // Load data for the layout (header or about section)
        $tentang_model = new TentangModels();
        $this->layoutData = $tentang_model->first();

        // Load categories data
        $kategori_model = new KategoriVideoModels();
        $this->categories = $kategori_model->findAll();
    }

    protected function render($view, $data = [])
    {
        // Merge layout data and categories with the view data
        $data['layout'] = $this->layoutData;
        $data['categories'] = $this->categories;

        // Render the view with the layout
        return view($view, $data);
    }
}
