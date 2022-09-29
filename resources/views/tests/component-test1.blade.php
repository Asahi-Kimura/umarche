<x-tests.app>
    <x-slot name='header'>ヘッダー１</x-slot>
    コンポーネント１

    <x-tests.card title='タイトル1' content='本文' :message='$message' />
    <x-tests.card title='タイトル２' content='本文' :message='$message' />
    <x-tests.card title='cssを変更したい' class='bg-red-300' content='本文' :message='$message' />
    

</x-tests.app>