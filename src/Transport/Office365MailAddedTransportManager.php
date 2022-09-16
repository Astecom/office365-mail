<?php

namespace Office365Mail\Transport;

use Illuminate\Mail\TransportManager;

class Office365MailAddedTransportManager extends TransportManager
{
    protected function createOffice365MailDriver()
    {
        return new Office365MailTransport;
    }
}
