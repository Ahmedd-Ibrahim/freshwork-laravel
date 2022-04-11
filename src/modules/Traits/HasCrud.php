<?php
namespace Freshwork\modules\Traits;

use Freshwork\modules\Records\RecordInterface;

trait HasCrud
{
    public function create(RecordInterface $recordInterface): Object
    {
        return $this->handelRequest('POST', $this->resource, ['body' => json_encode($recordInterface->getFieldsValues())]);
    }

    public function find(int $id, array $query = []): Object
    {
        return $this->handelRequest('GET', "{$this->resource}/{$id}", ['query' => $query]);
    }

    public function update(int $id, RecordInterface $recordInterface): Object
    {
        return $this->handelRequest('PUT', "{$this->resource}/{$id}", ['body' => json_encode($recordInterface->getFieldsValues())]);
    }

    public function destroy(int $id): Object
    {
        return $this->handelRequest('DELETE', "{$this->resource}/{$id}");
    }
}
