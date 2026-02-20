<?php
// Configuración de Clínica Brossi
$supabase_url = "https://ezhdprzakqisipzchsqc.supabase.co";
$supabase_key = "sb_publishable_MhAXQMxCuGXXH3HLzB75pw_IkLW25nT";

// Función maestra para conectar con la base de datos
function consultaSupabase($endpoint, $metodo = 'GET', $datos = null, $token = null) {
    global $supabase_url, $supabase_key;
    $url = $supabase_url . "/rest/v1/" . $endpoint;
    $ch = curl_init($url);
    
    $headers = [
        "apikey: $supabase_key",
        "Content-Type: application/json",
        "Prefer: return=representation"
    ];
    
    if ($token) {
        $headers[] = "Authorization: Bearer " . $token;
    } else {
        $headers[] = "Authorization: Bearer " . $supabase_key;
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $metodo);
    if ($datos) curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datos));
    
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res, true);
}
?>