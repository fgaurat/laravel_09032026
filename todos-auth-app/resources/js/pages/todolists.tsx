import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import { todolists } from '@/routes';
import type { BreadcrumbItem } from '@/types';
import { Link } from 'lucide-react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'TodoLists',
        href: todolists(),
    },
];

export default function TodoLists({ todoLists }) {
    console.log(todoLists);
    const todos =[]
    for(let t of todoLists){
        todos.push(<li key={t.id}>{t.title}</li>)
    }

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Todolists" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div className="grid auto-rows-min gap-4 md:grid-cols-3"></div>
                <div className="relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                    <ul>
                        {todos.map((t) => t)}
                    </ul>
                </div>
            </div>
        </AppLayout>
    );
}
