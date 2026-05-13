<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Application::truncate();
        $json = File::get(base_path('data.json'));
        $data = json_decode($json, true);

        // Mapping nama aplikasi ke file logo di public/images/brm/
        $brmLogos = [
            'Aghrish' => '/images/brm/aghris.png',
            'HCMDDS' => '/images/brm/HCMDDS.png',
            'PALMS' => '/images/brm/PALMS.png',
            'PALAPA' => '/images/brm/PALAPA.png',
            'ERIN' => '/images/brm/Erin.png',
            'MY PALMCO' => '/images/brm/Mypalmco.png',
            'PALM SIGN' => '/images/brm/PalmSign.png',
            'IPS' => '/images/brm/IPS.png',
            'Aplikasi Elemen' => '/images/brm/Elemen.png',
            'Aplikasi Padi UMKM' => '/images/brm/Padi.png',
            'RUPA' => '/images/brm/RUPA.png',
            'SPS' => '/images/brm/SPS.png',
            'PALM GO' => '/images/brm/palmgo.png',
            'AUTO GI' => '/images/brm/AUTOGI.png',
            'Monitoring Pekerjaan Sub TI 2026' => '/images/brm/googledocs.png',
            'Monitoring Pekerjaan Sub Logistik 2026' => '/images/brm/googledocs.png',
            'Usulan perbaikan IPS pengadaan' => '/images/brm/googledocs.png',
            'DASHBOARD PENGADAAN' => '/images/palmco2.png',
            'IMS Palm Co' => '/images/palmco2.png',
        ];

        foreach ($data as $row) {
            if (is_numeric($row['Unnamed: 0'] ?? null)) {
                $url = $row['Unnamed: 3'];
                $name = $row['Unnamed: 1'];
                Application::create([
                    'name' => $name,
                    'slug' => Str::slug($name),
                    'category' => $row['Unnamed: 2'] ?? 'Lainnya',
                    'description' => $row['Unnamed: 7'] ?? null,
                    'url' => ($url && str_starts_with($url, 'http')) ? $url : '#',
                    'icon' => $brmLogos[$name] ?? null,
                    'type' => 'brm',
                    'is_featured' => false,
                ]);
            }
        }

        $aiTools = [
            ['name' => 'ChatGPT', 'description' => 'AI Assistant from OpenAI', 'url' => 'https://chat.openai.com/', 'icon' => '/images/ai/chatgpt.svg'],
            ['name' => 'Gemini', 'description' => 'Google Assistant powered by AI', 'url' => 'https://gemini.google.com/', 'icon' => '/images/ai/gemini.svg'],
            ['name' => 'Canva', 'description' => 'Design platform', 'url' => 'https://www.canva.com/', 'icon' => '/images/ai/canva.svg'],
            ['name' => 'Claude', 'description' => 'Anthropic Claude', 'url' => 'https://claude.ai/', 'icon' => '/images/ai/claude.svg'],
            ['name' => 'Perplexity', 'description' => 'AI Search Engine', 'url' => 'https://www.perplexity.ai/', 'icon' => '/images/ai/perplexity.svg'],
            ['name' => 'Gamma', 'description' => 'AI Presentation', 'url' => 'https://gamma.app/', 'icon' => '/images/ai/gamma.svg'],
            ['name' => 'Notion AI', 'description' => 'Integrated Workspace', 'url' => 'https://www.notion.so/', 'icon' => '/images/ai/notion.svg'],
            ['name' => 'Copilot', 'description' => 'Microsoft AI', 'url' => 'https://copilot.microsoft.com/', 'icon' => '/images/ai/copilot.svg'],
        ];

        foreach ($aiTools as $tool) {
            Application::create([
                'name' => $tool['name'],
                'slug' => Str::slug($tool['name']),
                'category' => 'AI Tools',
                'description' => $tool['description'],
                'url' => $tool['url'],
                'icon' => $tool['icon'],
                'type' => 'ai_tools',
                'is_featured' => true,
            ]);
        }
    }
}
