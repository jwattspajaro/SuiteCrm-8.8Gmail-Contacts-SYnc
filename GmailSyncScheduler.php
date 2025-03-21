<?php

class GmailSyncScheduler {
    public function execute() {
        $sync = new GmailSync();
        $sync->syncAllContacts();
    }
}
