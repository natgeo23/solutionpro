<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Asignación y validación de variables
    $montantMoyen = isset($_POST['montant-moyen']) ? (float) $_POST['montant-moyen'] : 0; // A
    $prestationsParSemaine = isset($_POST['prestations-proposees-par-semaine-etablissement']) ? (int) $_POST['prestations-proposees-par-semaine-etablissement'] : 0; // B
    $unitesParPrestation = isset($_POST['prestations-proposees-par-semaine-event']) ? (int) $_POST['prestations-proposees-par-semaine-event'] : 0; // C
    $tauxReservation = isset($_POST['taux-de-resevation']) ? ((float) $_POST['taux-de-resevation'] / 100) : 0; // D
    $noShows = isset($_POST['creneaux-proposes-par-semaine']) ? (int) $_POST['creneaux-proposes-par-semaine'] : 0; // E

    // Comprobación de valores definidos y válidos
    if ($montantMoyen > 0 && $prestationsParSemaine > 0 && $unitesParPrestation > 0 && $tauxReservation > 0 && $noShows > 0) {
        // Horas Ahorradas (hoursSaved)
        $hoursSaved = round(($prestationsParSemaine * $unitesParPrestation * $tauxReservation * 5) / 60, 2);

        // Nuevos Clientes (newClientsRevenue)
        $newClientsRevenue = round($montantMoyen * 3, 2);

        // Reducción No Shows (noShowReductionRevenue)
        $noShowReductionRevenue = round($montantMoyen * $noShows * 0.50 * 4, 2);

        // Mejora del Tasa de llenado (improvementRate)
        $improvementRate = round(($montantMoyen * $prestationsParSemaine * $unitesParPrestation * (($tauxReservation / 100) * 4)) * 25, 2);

        // Total adicional (additionalRevenue)
        $additionalRevenue = round($newClientsRevenue + $noShowReductionRevenue + $improvementRate, 2);

        // Limitar a 6 caracteres y agregar puntos suspensivos si es necesario
        function limit_characters($number) {
            if (strlen($number) > 6) {
                return substr($number, 0, 6) . '...';
            }
            return $number;
        }

        // Aplicar límite de caracteres
        $hoursSaved = limit_characters($hoursSaved);
        $newClientsRevenue = limit_characters($newClientsRevenue);
        $noShowReductionRevenue = limit_characters($noShowReductionRevenue);
        $improvementRate = limit_characters($improvementRate);
        $additionalRevenue = limit_characters($additionalRevenue);

        // Resultados como JSON
        echo json_encode([
            'hoursSaved' => $hoursSaved,
            'newClientsRevenue' => $newClientsRevenue,
            'noShowReductionRevenue' => $noShowReductionRevenue,
            'improvementRate' => $improvementRate,
            'additionalRevenue' => $additionalRevenue
        ]);
    } else {
        echo json_encode(['error' => 'Datos incompletos o inválidos']);
    }
}
?>
