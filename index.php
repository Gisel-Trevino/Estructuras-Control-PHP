<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estructuras de Control con PHP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="min-h-screen bg-gray-100 px-4 py-10">
        <div class="mx-auto flex max-w-5xl flex-col items-center gap-8">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-900">Estructuras de Control con PHP</h1>
                <p class="mt-2 text-gray-600">En esta página se muestran ejemplos de estructuras de control en PHP.</p>
            </div>

                <div class="w-full max-w-2xl rounded-2xl bg-white p-8 shadow-md text-center">
                    <?php
                        $accion = $_POST['accion'] ?? 'inicio';
                    ?>
                    <?php if ($accion === 'inicio'): ?>
                        <div class="flex flex-col items-center gap-6">
                            <form method="post" class="flex flex-wrap items-center justify-center gap-3">
                                <p class="w-full">Selecciona una estructura de control para ejecutar:</p>
                                <button type="submit" name="accion" value="form-if" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Ejecutar If</button>
                                <button type="submit" name="accion" value="form-if_else" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Ejecutar If/Else</button>
                                <button type="submit" name="accion" value="form-while" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Ejecutar While</button>
                                <button type="submit" name="accion" value="form-dowhile" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Ejecutar Do/While</button>
                                <button type="submit" name="accion" value="form-for" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Ejecutar For</button>
                                <button type="submit" name="accion" value="form-switch_case" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Ejecutar Switch</button>
                                <button type="submit" name="accion" value="form-extra" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Ejecutar Extra</button>
                            </form>
                        </div>

                    <?php elseif ($accion === 'form-if'): ?>
                    <div class="flex flex-col items-center gap-6">
                        <p>Ejemplo de estructura If:</p>
                        <form method="post">
                            <input type="hidden" name="accion" value="form-if_result">
                            <label for="numero">Ingrese un número:</label><br>
                            <label>Valor 1: <input type="number" name="a"></label><br>
                            <label>Valor 2: <input type="number" name="b"></label><br><br>
                                <button type="submit" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Comparar</button>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                        </form>
                    </div>
                    <?php elseif ($accion === 'form-if_result'): ?>
                    <div>
                        <?php
                            $a = $_POST['a'] ?? 0;
                            $b = $_POST['b'] ?? 0;
                            if ($a > $b) {
                                echo "El valor 1 es mayor que el valor 2.";
                            }
                        ?>
                        <form method="post">
                            <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                        </form>
                    </div>

                    <?php elseif ($accion === 'form-if_else'): ?>
                        <div class="flex flex-col items-center gap-6">
                            <p>Ejemplo de estructura Else/If:</p>
                            <form method="post">
                                <input type="hidden" name="accion" value="form-if_else_result">
                                <label for="numero">Ingrese un número:</label><br>
                                <label>Valor 1: <input type="number" name="a"></label><br>
                                <label>Valor 2: <input type="number" name="b"></label><br><br>
                                <button type="submit" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Comparar</button>
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                        </div>
                    <?php elseif ($accion === 'form-if_else_result'): ?>
                        <div>
                            <?php
                                $a = $_POST['a'] ?? 0;
                                $b = $_POST['b'] ?? 0;
                                if ($a > $b) {
                                    echo "El valor 1 es mayor que el valor 2.";
                                } elseif ($a < $b) {
                                    echo "El valor 2 es mayor que el valor 1.";
                                } else {
                                    echo "Ambos valores son iguales.";
                                }  
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                        </div>
                    
                    <?php elseif ($accion === 'form-while'): ?>
                    <div>
                        <p>Ejemplo de estructura While:</p>
                        <p>Lista de meses del año:</p>
                        <form method="post">
                            <input type="hidden" name="accion" value="form-while_result">
                            <button type="submit" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Mostrar meses</button>
                            <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                        </form>
                    </div>
                    <?php elseif ($accion === 'form-while_result'): ?>
                        <div>
                            <?php
                                $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                                $i = 0;
                                while ($i < count($meses)) {
                                    echo ($i + 1) . ". " . $meses[$i] . "<br>";
                                    $i++;
                                }
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                        </div>

                    <?php elseif ($accion === 'form-dowhile'): ?>
                        <div>
                        <p>Ejemplo de estructura Do/While:</p>
                        <p>Lista de días de la semana:</p>
                        <form method="post">
                            <input type="hidden" name="accion" value="form-dowhile_result">
                            <button type="submit" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Mostrar días</button>
                            <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                        </form>
                        </div>
                    <?php elseif ($accion === 'form-dowhile_result'): ?>
                        <div>
                            <?php
                                $dias = ["Domingo", "Sabado", "Viernes", "Jueves", "Miércoles", "Martes", "Lunes"];
                                $i = 0;
                                do {
                                    echo ($i + 1) . ". " . $dias[$i] . "<br>";
                                    $i++;
                                } while ($i < count($dias));
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                        </div>
                    
                    <?php elseif ($accion === 'form-for'): ?>
                        <p>Ejemplo de estructura For:</p>
                        <div class="flex gap-3 flex-wrap">
                            <form method="post">
                                <input type="hidden" name="accion" value="form-for_result">
                                <button type="submit" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Mostrar días de la semana</button>
                            </form>
                            <form method="post">
                                <input type="hidden" name="accion" value="form-for_result-meses">
                                <button type="submit" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Mostrar meses del año</button>
                            </form>
                            <form method="post">
                                <input type="hidden" name="accion" value="inicio">
                                <button type="submit" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                        </div>
                    <?php elseif ($accion === 'form-for_result'): ?>
                        <div>
                            <?php
                                $diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
                                for ($i = 0; $i < count($diasSemana); $i++) {
                                    echo ($i + 1) . ". " . $diasSemana[$i] . "<br>";
                                }
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                        </div>

                    <?php elseif ($accion === 'form-for_result-meses'): ?>
                        <div>
                            <?php
                                $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                                for ($i = 0; $i < count($meses); $i++) {
                                    echo ($i + 1) . ". " . $meses[$i] . "<br>";
                                }
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                        </div>    

                    <?php elseif ($accion === 'form-switch_case'): ?>
                        <p>Comparar el día de la semana del usuario:</p>
                        <form method="post">
                        <input type="hidden" name="accion" value="form-switch_case_result">
                        <input type="hidden" name="dia_semana" id="dia_semana">
                        <button type="submit" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Enviar día de la semana</button>
                        
                            <button type="submit" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                        
                        </form>
                        <script>
                            const diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
                            const hoy = new Date();
                            const diaNombre = diasSemana[hoy.getDay()];
                            document.getElementById('dia_semana').value = diaNombre;
                        </script>
                    <?php elseif ($accion === 'form-switch_case_result'): ?>
                        <div>
                            <?php
                                $diasSemana = [$_POST['dia_semana'] ?? ''];
                                switch ($diasSemana[0]) {
                                    case 'Lunes':
                                        echo "Lunes";
                                        break;
                                    case 'Martes':
                                        echo "Martes";
                                        break;
                                    case 'Miércoles':
                                        echo "Miércoles";
                                        break;
                                    case 'Jueves':
                                        echo "Jueves";
                                        break;
                                    case 'Viernes':
                                        echo "Viernes";
                                        break;
                                    case 'Sábado':
                                        echo "Sábado";
                                        break;
                                    case 'Domingo':
                                        echo "Domingo";
                                        break;
                                    default:
                                        echo "Día no reconocido.";
                                }
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                        </div>

                    <?php elseif ($accion === 'form-extra'): ?>

                        <p>Ejemplo de estructura extra:</p>
                        <p>Operaciones: </p><br>
                        <p>¿Que operación desea realizar?</p>
                        
                        <h4>Tabla de sumas:</h4>
                        <form method="post">
                            <input type="hidden" name="accion" value="form-extra-sumar">
                            <label for="sumar">Ingrese un número para sumar:
                                <input type="number" name="sumar" id="sumar" required>
                                <button type="submit" name="accion" value="form-extra-sumar" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl w-32 h-9">Sumar</button>
                            </label>
                        </form><br>

                        <h4>Tabla de restas:</h4>
                        <form method="post">
                            <input type="hidden" name="accion" value="form-extra-restar">
                            <label for="restar">Ingrese un número para restar:
                                <input type="number" name="restar" id="restar" required>
                                <button type="submit" name="accion" value="form-extra-restar" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl w-32 h-9">Restar</button>
                            </label>
                        </form><br>

                        <h4>Tabla de multiplicar:</h4>
                        <form method="post">
                            <input type="hidden" name="accion" value="form-extra-multiplicar">
                            <label for="mult">Ingrese un número para multiplicar:
                                <input type="number" name="mult" id="mult" required>
                                <button type="submit" name="accion" value="form-extra-multiplicar" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl w-32 h-9">Multiplicar</button>
                            </label>
                        </form><br>

                        <h4>Tabla de dividir:</h4>
                        <form method="post">
                            <input type="hidden" name="accion" value="form-extra-dividir">
                            <label for="dividir">Ingrese un número para dividir:
                                <input type="number" name="dividir" id="dividir" required>
                                <button type="submit" name="accion" value="form-extra-dividir" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl w-32 h-9">Dividir</button>
                            </label>
                        </form><br>

                        <form method="post">
                            <input type="hidden" name="accion" value="form-extra_result">
                            <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                        </form><br>

                    <?php elseif ($accion === 'form-extra-sumar'): ?>
                            <?php
                            $sumar = $_POST['sumar'] ?? 0;
                                echo "<h3>Tabla de sumas del $sumar:</h3>";
                                for ($i = 1; $i <= 10; $i++) {
                                    echo "$sumar + $i = " . ($sumar + $i) . "<br>";
                                }
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>

                    <?php elseif ($accion === 'form-extra-restar'): ?>
                            <?php
                            $restar = $_POST['restar'] ?? 0;
                                echo "<h3>Tabla de restas del $restar:</h3>";
                                for ($i = 1; $i <= 10; $i++) {
                                    echo "$restar - $i = " . ($restar - $i) . "<br>";
                                }
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>

                    <?php elseif ($accion === 'form-extra-multiplicar'): ?>
                            <?php
                            $mult= $_POST['mult'] ?? 0;
                                echo "<h3>Tabla de multiplicar del $mult:</h3>";
                                for ($i = 1; $i <= 10; $i++) {
                                    echo "$mult x $i = " . ($mult * $i) . "<br>";
                                }
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                
                    <?php elseif ($accion === 'form-extra-dividir'): ?>
                            <?php
                            $dividir = $_POST['dividir'] ?? 0;
                                echo "<h3>Tabla de dividir del $dividir:</h3>";
                                for ($i = 1; $i <= 10; $i++) {
                                    echo "$dividir / $i = " . ($dividir / $i) . "<br>";
                                }
                            ?>
                            <form method="post">
                                <button type="submit" name="accion" value="inicio" class="bg-[#474A8A] hover:bg-[#787CB5] text-white font-bold py-2 px-4 rounded-xl">Volver al menú</button>
                            </form>
                    <?php endif; ?>
            </div>
            <footer class="text-center text-gray-500">
                <p>Treviño Manzano Gisel Margarita</p>
            </footer>
        </div>
    </div>
</body>
</html>