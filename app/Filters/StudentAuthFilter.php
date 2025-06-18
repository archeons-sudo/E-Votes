<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class StudentAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $currentUrl = current_url();
        
        log_message('debug', '=== STUDENT AUTH FILTER START ===');
        log_message('debug', 'StudentAuthFilter: Request Method: ' . $request->getMethod());
        log_message('debug', 'StudentAuthFilter: Current URL: ' . $currentUrl);
        log_message('debug', 'StudentAuthFilter: Session ID: ' . session_id());
        log_message('debug', 'StudentAuthFilter: Session data: ' . json_encode($session->get()));
        
        // If not logged in as student
        if (!$session->get('isStudentLoggedIn')) {
            log_message('debug', 'StudentAuthFilter: User not logged in, redirecting to login');
            log_message('debug', 'StudentAuthFilter: Session missing isStudentLoggedIn flag');
            
            return redirect()->to(base_url('login'))
                           ->with('error', 'Please login to access the voting system.');
        }
        
        log_message('debug', 'StudentAuthFilter: User is logged in, proceeding');
        log_message('debug', 'StudentAuthFilter: Student ID: ' . $session->get('studentId'));
        log_message('debug', '=== STUDENT AUTH FILTER END ===');
        return;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing
    }
} 