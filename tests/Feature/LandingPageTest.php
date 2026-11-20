<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    /**
     * Test the landing page renders successfully with brand elements and updated credentials
     */
    public function test_landing_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('TOURBAIK');
        $response->assertSee('Biro Haji & Umrah', false);
        $response->assertSee('Umrah Signature VIP Bintang 5');
        $response->assertSee('Kebijakan Privasi');
        $response->assertSee('logo-tourbaik-header.jpg');
        $response->assertSee('logo-tourbaik-favicon.png');
        $response->assertSee('favicon-32x32.png');

        // Assert updated credentials from user revisions
        $response->assertSee('NO.25072200719360001');
        $response->assertSee('021-82784415');
        $response->assertSee('6281299997703');
        $response->assertSee('0812-9999-7703');
        $response->assertSee('Jl. Rose Garden 1 No.86');

        // Assert bank accounts and official email
        $response->assertSee('1670004926746');
        $response->assertSee('5771470972');
        $response->assertSee('PT Khaira Berkah Mandiri');
        $response->assertSee('tourbaik.id@gmail.com');

        // Assert removed sections are no longer rendered
        $response->assertDontSee('Jadwal & Ketersediaan Seat Keberangkatan');
        $response->assertDontSee('Simulasi Tabungan Umrah Syariah');
    }

    /**
     * Test the privacy policy page renders with legal protections and updated contact info
     */
    public function test_privacy_policy_page_renders_successfully(): void
    {
        $response = $this->get('/kebijakan-privasi');

        $response->assertStatus(200);
        $response->assertSee('Kebijakan Privasi');
        $response->assertSee('UU PDP No. 27 Tahun 2022');
        $response->assertSee('PT Khaira Berkah Mandiri');
        $response->assertSee('021-82784415');
        $response->assertSee('6281299997703');
        $response->assertSee('0812-9999-7703');
        $response->assertSee('Jl. Rose Garden 1 No.86');
        $response->assertSee('tourbaik.id@gmail.com');
    }

    /**
     * Test consultation inquiry redirects to WhatsApp with official hotline
     */
    public function test_consultation_form_redirects_to_whatsapp(): void
    {
        $response = $this->post('/konsultasi', [
            'nama' => 'Haji Sulaiman',
            'telepon' => '081299998888',
            'kota' => 'Bekasi Selatan',
            'paket_minat' => 'Umrah Signature VIP Bintang 5',
            'jumlah_jamaah' => 2,
            'pesan' => 'Mohon info kamar double'
        ]);

        $response->assertStatus(302);
        $response->assertRedirectContains('https://api.whatsapp.com/send?phone=6281299997703');
    }
}
