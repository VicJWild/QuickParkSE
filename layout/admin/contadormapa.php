<span   style="margin-left: 20px;">
                                        <button class="btn shadow" style="border: #686868; background-color: #177efb ;color: #FFFFFF ;border: 1px solid; border-radius: 5px; width: 100px; height: 40px">
                                            <b>
                                                <?php
                                                $total_puestos = 0;
                                                $disponibles = 0;
                                                $ocupados = 0;

                                                $query_count = $pdo->prepare("SELECT COUNT(*) AS total FROM tb_mapeos WHERE estado = '1'");
                                                $query_count->execute();
                                                $total_puestos = $query_count->fetchColumn();

                                                $query_disponibles = $pdo->prepare("SELECT COUNT(*) AS disponibles FROM tb_mapeos WHERE estado = '1' AND estado_espacio = 'DISPONIBLE'");
                                                $query_disponibles->execute();
                                                $disponibles = $query_disponibles->fetchColumn();

                                                $ocupados = $total_puestos - $disponibles; // Calculate occupied spots

                                                echo "Total: " . $total_puestos ;
                                                ?>
                                            </b>
                                        </button>
                                </span>

<span   style="margin-left: 20px;">
                                        <button class="btn shadow" style="border: #686868; background-color: #28a745 ;color: #FFFFFF ;border: 1px solid; border-radius: 5px; width: 160px; height: 40px">
                                            <b>
                                                <?php
                                                $total_puestos = 0;
                                                $disponibles = 0;
                                                $ocupados = 0;

                                                $query_count = $pdo->prepare("SELECT COUNT(*) AS total FROM tb_mapeos WHERE estado = '1'");
                                                $query_count->execute();
                                                $total_puestos = $query_count->fetchColumn();

                                                $query_disponibles = $pdo->prepare("SELECT COUNT(*) AS disponibles FROM tb_mapeos WHERE estado = '1' AND estado_espacio = 'DISPONIBLE'");
                                                $query_disponibles->execute();
                                                $disponibles = $query_disponibles->fetchColumn();

                                                $ocupados = $total_puestos - $disponibles; // Calculate occupied spots

                                                echo "Disponibles: " . $disponibles ;
                                                ?>
                                            </b>
                                        </button>
                                </span>

<span   style="margin-left: 20px;">
                                        <button class="btn shadow" style="border: #686868; background-color: #da0023 ;color: #FFFFFF ;border: 1px solid; border-radius: 5px; width: 160px; height: 40px">
                                            <b>
                                                <?php
                                                $total_puestos = 0;
                                                $disponibles = 0;
                                                $ocupados = 0;

                                                $query_count = $pdo->prepare("SELECT COUNT(*) AS total FROM tb_mapeos WHERE estado = '1'");
                                                $query_count->execute();
                                                $total_puestos = $query_count->fetchColumn();

                                                $query_disponibles = $pdo->prepare("SELECT COUNT(*) AS disponibles FROM tb_mapeos WHERE estado = '1' AND estado_espacio = 'DISPONIBLE'");
                                                $query_disponibles->execute();
                                                $disponibles = $query_disponibles->fetchColumn();

                                                $ocupados = $total_puestos - $disponibles; // Calculate occupied spots

                                                echo  "Ocupados: " . $ocupados;
                                                ?>
                                            </b>
                                        </button>
                                </span>