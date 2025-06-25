<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Storage;

class SiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static string $view = 'filament.pages.site-settings';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationLabel = 'Site Settings';
    protected static ?int $navigationSort = 1;

    public $settings = [];

    public function mount(): void
    {
        $this->settings = Setting::pluck('value', 'key')->toArray();
        $this->form->fill($this->settings);
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make(2)
                ->schema([
                    TextInput::make('site_brand_name')
                        ->label('Brand Name')
                        ->required()
                        ->maxLength(255)
                        ->extraAttributes(['class' => 'flex justify-center']),
                    TextInput::make('site_slogan')
                        ->label('Site Slogan')
                        ->maxLength(255)
                        ->extraAttributes(['class' => 'flex justify-center']),
                    FileUpload::make('site_logo')
                        ->label('Site Logo')
                        ->image()
                        ->disk('public')
                        ->directory('logos')
                        ->maxSize(1024) // 1MB
                        ->helperText('Recommended: 512x512px, PNG/SVG')
                        ->columnSpan(2)
                        ->extraAttributes(['class' => 'flex justify-center']),
                    FileUpload::make('site_favicon')
                        ->label('Favicon')
                        ->image()
                        ->disk('public')
                        ->directory('favicons')
                        ->maxSize(512) // 512KB
                        ->helperText('Recommended: 64x64px, PNG/ICO')
                        ->columnSpan(2)
                        ->extraAttributes(['class' => 'flex justify-center']),
                ]),
        ];
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Settings')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting && $setting->type === 'file' && $value !== $this->settings[$key]) {
                // Delete old file if it exists
                if ($this->settings[$key]) {
                    Storage::disk('public')->delete($this->settings[$key]);
                }
                // Store file path
                $data[$key] = $value;
            }
            Setting::updateOrCreate(['key' => $key], ['value' => $data[$key]]);
        }

        Notification::make()
            ->title('Settings saved successfully')
            ->success()
            ->send();

        $this->settings = $data;
    }
}