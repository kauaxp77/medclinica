<?php 

session_start ();

?>








<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDCLIN</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="icon" href="imagens/farmacia.png" type="image/x-icon">
</head>

<body>

    <div class="app-container">
        <div class="app-header">
            <div class="app-header-left">
                <span class="app-icon"></span>
                <p class="app-name"> <img  href="index.php" src="imagens/remove.bg-removebg-preview.png" alt="logo" width="400px"></p>
                <div class="search-wrapper">
                    <input class="search-input" type="text" placeholder="Pesquisar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search"
                        viewBox="0 0 24 24">
                        <defs></defs>
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="M21 21l-4.35-4.35"></path>
                    </svg>
                </div>
            </div>
            <div class="app-header-right">
                <button class="mode-switch" title="Switch Theme">
                    <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                        <defs></defs>
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                </button>
                <button class="add-btn" title="Add New Project">
                    <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                </button>
                <button class="notification-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                        <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                    </svg>
                </button>
                <button class="profile-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 19 19">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <span>ADMIN</span>
                </button>
            </div>
            <button class="messages-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-message-circle">
                    <path
                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                </svg>
            </button>
        </div>
        <div class="app-content">
            <div class="app-sidebar">
                <a href="" class="app-sidebar-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                </a>
                <a href="" class="app-sidebar-link">
                    <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="feather feather-pie-chart" viewBox="0 0 24 24">
                        <defs />
                        <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z" />
                    </svg>
                </a>
                <a href="CalendarioNovo/index.html" class="app-sidebar-link">
                    <svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                        <line x1="16" y1="2" x2="16" y2="6" />
                        <line x1="8" y1="2" x2="8" y2="6" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                    </svg>
                </a>
                <a href="" class="app-sidebar-link">
                    <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="feather feather-settings" viewBox="0 0 24 24">
                        <defs />
                        <circle cx="12" cy="12" r="3" />
                        <path
                            d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
                    </svg>
                </a>
            </div>
            <div class="projects-section">
                <div class="projects-section-header">
                    <p>relatórios de consultas:</p>
                    <p class="time">Mês De Janeiro</p>
                </div>
                <div class="projects-section-line">
                    <div class="projects-status">
                        <div class="item-status">
                            <span class="status-number">45</span>
                            <span class="status-type">total de consultas</span>
                        </div>
                        <div class="item-status">
                            <span class="status-number">50</span>
                            <span class="status-type">total de consultas Remarcadas</span>
                        </div>
                        <div class="item-status">
                            <span class="status-number">24</span>
                            <span class="status-type">Consulta Agendanda</span>
                        </div>
                        <div class="item-status">
                            <span class="status-number">62</span>
                            <span class="status-type">Consultas Concluída</span>
                        </div>
                    </div>
                    <div class="view-actions">
                        <button class="view-btn list-view" title="List View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-list">
                                <line x1="8" y1="6" x2="21" y2="6" />
                                <line x1="8" y1="12" x2="21" y2="12" />
                                <line x1="8" y1="18" x2="21" y2="18" />
                                <line x1="3" y1="6" x2="3.01" y2="6" />
                                <line x1="3" y1="12" x2="3.01" y2="12" />
                                <line x1="3" y1="18" x2="3.01" y2="18" />
                            </svg>
                        </button>
                        <button class="view-btn grid-view active" title="Grid View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7" />
                                <rect x="14" y="3" width="7" height="7" />
                                <rect x="14" y="14" width="7" height="7" />
                                <rect x="3" y="14" width="7" height="7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="project-boxes jsGridView">
                    <div class="project-box-wrapper">
                        <div class="project-box" style="background-color: #fee4cb;">
                            <div class="project-box-header">
                                <span></span>
                                <div class="more-wrapper">
                                    <button class="project-btn-more">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="5" r="1" />
                                            <circle cx="12" cy="19" r="1" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="project-box-content-header">
                                <p class="box-content-header">Ginecologista</p>
                                <p class="box-content-subheader">Prototipagem em andamento.</p>
                            </div>
                            <div class="box-progress-wrapper">
                                <p class="box-progress-header">Progresso</p>
                                <div class="box-progress-bar">
                                    <span class="box-progress" style="width: 60%; background-color: #ff942e"></span>
                                </div>
                                <p class="box-progress-percentage">60%</p>
                            </div>
                            <div class="project-box-footer">
                                <div class="participants">
                                    <img src="" alt="participant">
                                    <img src="" alt="participant">
                                    <button class="add-participant" style="color: #ff942e;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <path d="M12 5v14M5 12h14" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="days-left" style="color: #ff942e;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-box-wrapper">
                        <div class="project-box" style="background-color: #e9e7fd;">
                            <div class="project-box-header">
                                <span></span>
                                <div class="more-wrapper">
                                    <button class="project-btn-more">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="5" r="1" />
                                            <circle cx="12" cy="19" r="1" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="project-box-content-header">
                                <p class="box-content-header">Odontopediatria </p>
                                <p class="box-content-subheader">Prototipagem  Concluída.</p>
                            </div>
                            <div class="box-progress-wrapper">
                                <p class="box-progress-header">Progresso</p>
                                <div class="box-progress-bar">
                                    <span class="box-progress" style="width: 50%; background-color: #4f3ff0"></span>
                                </div>
                                <p class="box-progress-percentage">50%</p>
                            </div>
                            <div class="project-box-footer">
                                <div class="participants">
                                    <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80"
                                        alt="participant">
                                    <img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80"
                                        alt="participant">
                                    <button class="add-participant" style="color: #4f3ff0;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <path d="M12 5v14M5 12h14" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="days-left" style="color: #4f3ff0;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-box-wrapper">
                        <div class="project-box">
                            <div class="project-box-header">
                                <span></span>
                                <div class="more-wrapper">
                                    <button class="project-btn-more">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="5" r="1" />
                                            <circle cx="12" cy="19" r="1" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="project-box-content-header">
                                <p class="box-content-header">Terapia Ocupacional Pediátrica</p>
                                <p class="box-content-subheader"> Prototipagem em andamento.</p>
                            </div>
                            <div class="box-progress-wrapper">
                                <p class="box-progress-header">Progresso</p>
                                <div class="box-progress-bar">
                                    <span class="box-progress" style="width: 80%; background-color: #096c86"></span>
                                </div>
                                <p class="box-progress-percentage">80%</p>
                            </div>
                            <div class="project-box-footer">
                                <div class="participants">
                                    <img src="https://images.unsplash.com/photo-1587628604439-3b9a0aa7a163?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                                        alt="participant">
                                    <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80"
                                        alt="participant">
                                    <button class="add-participant" style="color: #096c86;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <path d="M12 5v14M5 12h14" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="days-left" style="color: #096c86;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-box-wrapper">
                        <div class="project-box" style="background-color: #ffd3e2;">
                            <div class="project-box-header">
                                <span></span>
                                <div class="more-wrapper">
                                    <button class="project-btn-more">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="5" r="1" />
                                            <circle cx="12" cy="19" r="1" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="project-box-content-header">
                    <p class="box-content-header">Fisioterapia Neurológica</p>
                    <p class="box-content-subheader">Prototipagem  Concluída.</p>
                </div>
                <div class="box-progress-wrapper">
                    <p class="box-progress-header">Progresso</p>
                    <div class="box-progress-bar">
                        <span class="box-progress" style="width: 60%; background-color: #ff942e"></span>
                    </div>
                    <p class="box-progress-percentage">60%</p>
                </div>
                            <div class="project-box-footer">
                                <div class="participants">
                                    <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"
                                        alt="participant">
                                    <img src="https://images.unsplash.com/photo-1587628604439-3b9a0aa7a163?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                                        alt="participant">
                                    <button class="add-participant" style="color: #df3670;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <path d="M12 5v14M5 12h14" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="days-left" style="color: #df3670;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-box-wrapper">
                        <div class="project-box" style="background-color: #c8f7dc;">
                            <div class="project-box-header">
                                <span></span>
                                <div class="more-wrapper">
                                    <button class="project-btn-more">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="5" r="1" />
                                            <circle cx="12" cy="19" r="1" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="project-box-content-header">
                                <p class="box-content-header">Psiquiatra</p>
                                <p class="box-content-subheader">Prototipagem em andamento.</p>
                            </div>
                            <div class="box-progress-wrapper">
                                <p class="box-progress-header">Progresso</p>
                                <div class="box-progress-bar">
                                    <span class="box-progress" style="width: 60%; background-color: #34c471"></span>
                                </div>
                                <p class="box-progress-percentage">60%</p>
                            </div>
                            <div class="project-box-footer">
                                <div class="participants">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"
                                        alt="participant">
                                    <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                                        alt="participant">
                                    <button class="add-participant" style="color: #34c471;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <path d="M12 5v14M5 12h14" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="days-left" style="color: #34c471;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-box-wrapper">
                        <div class="project-box" style="background-color: #d5deff;">
                            <div class="project-box-header">
                                <span></span>
                                <div class="more-wrapper">
                                    <button class="project-btn-more">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="5" r="1" />
                                            <circle cx="12" cy="19" r="1" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="project-box-content-header">
                    <p class="box-content-header">Teste de Diagnóstico por Imagem</p>
                    <p class="box-content-subheader">Prototipagem Concluída.</p>
                </div>
                <div class="box-progress-wrapper">
                    <p class="box-progress-header">Progresso</p>
                    <div class="box-progress-bar">
                        <span class="box-progress" style="width: 50%; background-color: #4f3ff0"></span>
                    </div>
                    <p class="box-progress-percentage">50%</p>
                </div>
                            <div class="project-box-footer">
                                <div class="participants">
                                    <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"
                                        alt="participant">
                                    <img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80"
                                        alt="participant">
                                    <button class="add-participant" style="color: #4067f9;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <path d="M12 5v14M5 12h14" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="days-left" style="color: #4067f9;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="messages-section">
                <button class="messages-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x-circle">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="15" y1="9" x2="9" y2="15" />
                        <line x1="9" y1="9" x2="15" y2="15" />
                    </svg>
                </button>
                <div class="projects-section-header">
                    <p>MEDICOS</p>
                </div>
                <div class="messages">
                    <div class="message-box">
                        <img src="imagens/dotoura.jpg" 
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Dr.Stephanie</div>
                                <div class="star-checkbox">
                                    <input type="checkbox" id="star-1">
                                    <label for="star-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <p class="message-line">
                            Olá, meu nome é Stephanie e sou uma pessoa apaixonada pela vida e pelas oportunidades que ela oferece. Sou conhecida pela minha determinação e pela minha capacidade de enfrentar desafios de frente, sempre buscando soluções criativas e eficazes. 
                            </p>
                            <p class="message-line time">
                                Psiquiatra
                            </p>
                        </div>
                    </div>
                    <div class="message-box">
                        <img src="imagens/doutor.jpg"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Dr.Mark</div>
                                <div class="star-checkbox">
                                    <input type="checkbox" id="star-2">
                                    <label for="star-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <p class="message-line">
                            Mark é também um líder natural, capaz de inspirar e motivar os outros ao seu redor a alcançarem seu potencial máximo. Sua ética de trabalho excepcional e sua determinação o tornam uma pessoa admirável e respeitada por todos que têm o prazer de conhecê-lo.
                            </p>
                            <p class="message-line time">
                                Ginecologista
                            </p>
                        </div>
                    </div>
                    <div class="message-box">
                        <img src="imagens/DOUTOR2.jpg"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Dr. David</div>
                                <div class="star-checkbox">
                                    <input type="checkbox" id="star-3">
                                    <label for="star-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <p class="message-line">
                            Olá, meu nome é Dr. David e sou apaixonado por medicina e pelo bem-estar dos meus pacientes. Sou um médico dedicado e comprometido em fornecer o mais alto padrão de cuidados de saúde, combinando conhecimento técnico e empatia para garantir o melhor tratamento possível para cada pessoa que atendo.
                            </p>
                            <p class="message-line time">
                                Pediatra
                            </p>
                        </div>
                    </div>
                    <div class="message-box">
                        <img src="imagens/beautiful-young-female-doctor-looking-camera-office.jpg"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Dra. Jessica</div>
                                <div class="star-checkbox">
                                    <input type="checkbox" id="star-4">
                                    <label for="star-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <p class="message-line">
                            Olá, sou a Dra. Jessica e tenho o privilégio de trabalhar na área da saúde como médica. Meu compromisso é proporcionar cuidados compassivos e de alta qualidade aos meus pacientes, utilizando meu conhecimento e habilidades para promover a saúde e o bem-estar de todos que atendo.
                            </p>
                            <p class="message-line time">
                            clínico geral
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="team.js"></script>

</body>

</html>