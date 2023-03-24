<?php

namespace App\Filament\Resources\VoucherResource\Pages;

use App\Filament\Resources\VoucherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoucher extends EditRecord
{
    protected static string $resource = VoucherResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function beforeFill(){
        if ($this->record->payments()->exists()) {
            $this->notify('danger','YOU CANNOT EDIT THE VOUCHERS AFTER THEY HAVE BEEN USED');
            $this->redirect($this->getResource()::getUrl('index'));
        }
    }
}
