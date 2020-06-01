<?php

namespace App\Controller;

class ClientesController extends AppController
{
  public function index()
  {
    $this->loadComponent('Paginator');
    $clientes = $this->Paginator->paginate($this->Clientes->find());
    $this->set(compact('clientes'));
  }

  public function view($id = null)
  {
    $cliente = $this->Clientes->findById($id)->firstOrFail();
    $this->set(compact('cliente'));
  }

  public function edit($id = null)
  {
    $cliente = $this->Clientes->findById($id)->firstOrFail();
    if ($this->request->is('put')) {
      $newCliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
      if ($this->Clientes->save($newCliente)) {
        $this->Flash->success(__('Cliente editado'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não foi possível editar o cliente'));
    }
    $this->set(compact('cliente'));
  }

  public function add()
  {
    $cliente = $this->Clientes->newEmptyEntity();
    if ($this->request->is('post')) {
      $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());

      $cliente->user_id = 1;

      if ($this->Clientes->save($cliente)) {
        $this->Flash->success(__('Novo cliente salvo'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não foi possível adicionar o cliente'));
    }
    $this->set('cliente', $cliente);
  }


  public function delete($id)
  {
    $this->request->allowMethod(['post', 'delete']);

    $cliente = $this->Clientes->findById($id)->firstOrFail();
    if ($this->Clientes->delete($cliente)) {
      $this->Flash->success(__('O cliente foi excluído'));
      return $this->redirect(['action' => 'index']);
    }
    return null;
  }
}
